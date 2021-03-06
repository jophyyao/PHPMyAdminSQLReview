<?php
/*****
 * JophyYao add
 ****/
declare(strict_types=1);

namespace PhpMyAdmin;


class LogMysql
{
    /**
     * MySQL server hostname
     * @access protected
     * @var string
     */
    protected $host;

    /**
     * MySQL username
     * @access protected
     * @var string
     */
    protected $user;

    /**
     * MySQL user's password
     * @access protected
     * @var string
     */
    protected $pass;

    /**
     * MySQL Name of database to use
     * @access protected
     * @var string
     */
    protected $name;

    /**
     * MySQL Resource link identifier stored here
     * @access private
     * @var string
     */
    private $con;

    /**
     * MySQL Stores error messages for connection errors
     * @access private
     * @var string
     */
    private $connectError;

    private $port;

    /**
     * BasicMySQL constructor
     * @param string host (MySQL server hostname)
     * @param string User (MySQL User Name)
     * @param string Pass (MySQL User Password)
     * @param string Name (Database to select)
     * @access public
     */
    public function __construct($host, $user, $pass, $name, $port)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->name = $name;
        $this->port = $port;
        $this->DBconnect();
    }

    /**
     * Establishes connection to MySQL server and selects a database
     * @return void
     * @access private
     */
    private function DBconnect()
    {
        // Make connection to MySQL server
        try {
            $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->name, (int)$this->port);
        } catch (Error $e) {
            trigger_error('Could not connect to server: ' . $e->getMessage());
            $this->connectError = true;
        }
    }

    /**
     * Checks for errors
     * @return boolean
     * @access public
     */
    public function isError(): bool
    {
        if ($this->connectError)
            return true;
        $error = mysqli_error($this->con);
        if (empty ($error))
            return false;
        else
            return true;
    }

    /**
     * Returns an instance of a result class to fetch rows with
     * @param $sql string the database query to run
     * @return result
     * @access public
     */
    public function query($sql)
    {
        mysqli_query($this->con,"SET NAMES 'UTF8'") or die ('set names error!');
        try {
            $queryRess = mysqli_query($this->con, $sql);
        } catch (Error $e) {
            trigger_error('Query failed: ' . $e->getMessage() . ' SQL: ' . $sql);
        }

        if (!$this->isError()) {

            return new class ($this, $queryRess) {

                /**
                 * Instance of a result class providing database connection
                 * @access private
                 * @var BasicMySQL
                 */
                private $bsqli;

                /**
                 * Query resource
                 * @access private
                 * @var resource
                 */
                private $query;

                /**
                 * mySQL result constructor
                 * @param object mysql   (instance of BasicMySQL class)
                 * @param resource query (BasicMySQL query resource)
                 * @access public
                 */
                public function __construct(&$bsqli, $query)
                {
                    $this->bsqli =& $bsqli;
                    $this->query = $query;
                }

                /**
                 * Fetches a row from the result
                 * @return array
                 * @access public
                 */
                public function fetch(): array
                {
                    try {
                        $row = mysqli_fetch_array($this->query, MYSQLI_ASSOC);
                        return (array)$row;
                    } catch (Error $e) {
                        trigger_error('Fetch failed: ' . $e->getMessage());
                    }
                }

                /**
                 * Returns the number of rows selected
                 * @return int
                 * @access public
                 */
                public function size(): int
                {
                    try {
                        $size = mysqli_num_rows($this->query);
                        return $size;
                    } catch (Error $e) {
                        trigger_error('function size() error: ' . $e->getMessage());
                    }
                }

                /**
                 * Checks for BasicMySQL errors
                 * @return boolean
                 * @access public
                 */
                public function isError(): bool
                {
                    return $this->bsqli->isError();
                }

            };

        }
        // Free result set
        mysqli_free_result($queryRess);
        mysqli_close($this->con);
    }


}