<?php
/*****
 * JophyYao add
 ****/
declare(strict_types=1);


namespace PhpMyAdmin;


class SSO
{
    public function __construct()
    {

    }

    public function getUser(): String {
        $res = "jophyyao@163.com";
        if(isset($_COOKIE['x_webauth_user'])) {
            $res = $_COOKIE['x_webauth_user'];
        }
        return $res;
    }

}