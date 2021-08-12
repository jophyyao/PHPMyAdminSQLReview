<?php
/*****
 * JophyYao add
 ****/
declare(strict_types=1);

namespace PhpMyAdmin;

use PhpMyAdmin\Response;
use PhpMyAdmin\SSO;

class SqlHistory
{
    private $database;
    private $dbi;
    private $db_name;
    private $table;
    private $db_user;
    private $sso_user;
    private $client_ip;
    private $source_type;
    private $pma_query;
    private $sql_query;
    private $response;


    public function __construct(DatabaseInterface $dbi)
    {
        $this->dbi = $dbi;
        $this->database = 'phpmyadmin_log';
        $sso = new SSO();
        $this->sso_user = $sso->getUser();
        $this->response = Response::getInstance();
    }

    public function logdb_save()
    {
        $env = $_ENV;
        if (!empty($env['LOG_DB_HOSTS']) && !empty($env['LOG_DB_USER']) && !empty($env['LOG_DB_PASSWORD']) && !empty($env['LOG_DB_DATABASE'])) {
            if (empty($env['LOG_DB_PORT']))
                $env['LOG_DB_PORT'] = 3306;
            $lm = new LogMysql($env['LOG_DB_HOSTS'], $env['LOG_DB_USER'], $env['LOG_DB_PASSWORD'], $env['LOG_DB_DATABASE'], $env['LOG_DB_PORT']);
            $lm->query($this->sql_query);
        } else {
            $this->response->addJSON('message', Message::error("LOG_DB_XXX 环境变量未指定, 请联系管理员！"));
        }
    }

    public function sql_save($post, $cfg_server): bool
    {
        if (preg_match('/^(insert|update|delete|truncate|alter|rename|create|drop|replace)/im', $this->dbi->escapeString($post['sql_query'])) && empty($post['id_bookmark'])) {
            $this->pma_query = "'" . str_ireplace(array("\r", "\n", '\r', '\n'), '', $this->dbi->escapeString($post['sql_query'])) . "',";
            $this->db_name = $post['db'];
            $this->table = $post['table'];
            $this->db_user = $cfg_server['user'];
            $this->client_ip = $cfg_server['host'];
            $this->source_type = "sql";
            $this->sql_save_submit();
            return true;
        } elseif (!empty($post['id_bookmark'])) {
            $this->pma_query = "(select IFNULL(query, '') from phpmyadmin.pma__bookmark where id = ${post['id_bookmark']}), ";
            $this->db_name = $post['db'];
            $this->table = "pma__bookmark";
            $this->db_user = $cfg_server['user'];
            $this->client_ip = $cfg_server['host'];
            $this->source_type = "bookmark";
            $this->sql_save_submit();
            return true;
        } else {
            return false;
        }
    }

    public function common_save($post, $cfg_server, $sql_query, $source_type): bool
    {
        echo $sql_query;
        if (preg_match('/^(insert|update|delete|truncate|alter|rename|create|drop|replace)/im', $this->dbi->escapeString($sql_query))) {
            if (empty($post['db'])) $post['db'] = '';
            if (empty($post['table'])) $post['table'] = '';
            $this->pma_query = "'" . str_ireplace(array("\r", "\n", '\r', '\n'), '', $this->dbi->escapeString($sql_query)) . "',";
            $this->db_name = $post['db'];
            $this->table = $post['table'];
            $this->db_user = $cfg_server['user'];
            $this->client_ip = $cfg_server['host'];
            $this->source_type = $source_type;
            $this->sql_save_submit();
            return true;
        } else {
            return false;
        }
    }

    /*
     * export use
     * save all sql string start
     */
    public function all_save($post, $cfg_server, $sql_query, $source_type): bool
    {
        if (empty($post['db'])) $post['db'] = 'ALL';
        if (empty($post['table'])) $post['table'] = 'ALL';
        $this->pma_query = "'" . str_ireplace(array("\r", "\n", '\r', '\n'), '', $this->dbi->escapeString($sql_query)) . "',";
        $this->db_name = $post['db'];
        $this->table = $post['table'];
        $this->db_user = $cfg_server['user'];
        $this->client_ip = $cfg_server['host'];
        $this->source_type = $source_type;
        $this->sql_save_submit();
        return true;
    }

    private function sql_save_submit()
    {
        $this->sql_query = "insert into `$this->database`.`sql_history` "
            . "(`id`, `db`, `db_table`, `db_user`, `sso_user`, `db_ip`, `source_type`, `sql_query`, `updatetime`)values("
            . "NUll, "
            . "'" . $this->db_name . "', "
            . "'" . $this->table . "', "
            . "'" . $this->db_user . "', "
            . "'" . $this->sso_user . "', "
            . "'" . $this->client_ip . "', "
            . "'" . $this->source_type . "', "
            . $this->pma_query
            . "unix_timestamp());";
        $this->logdb_save();
        //$this->dbi->query($this->sql_query, DatabaseInterface::CONNECT_CONTROL);
    }


}