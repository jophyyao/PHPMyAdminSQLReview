CREATE DATABASE IF NOT EXISTS `phpmyadmin_log`
    DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE phpmyadmin_log;

CREATE TABLE `sql_history`
(
    `id`          bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `db`          varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
    `db_table`    varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
    `db_user`     varchar(45) CHARACTER SET utf8 COLLATE utf8_bin  DEFAULT NULL,
    `sso_user`    varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
    `db_ip`       varchar(45) CHARACTER SET utf8 COLLATE utf8_bin  DEFAULT NULL,
    `source_type` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin  DEFAULT NULL,
    `sql_query`   text,
    `updatetime`  int(10) unsigned    NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8 COMMENT ='SQL HISTORY'