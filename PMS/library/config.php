<?php
    session_start();

    $hosted = false;
    if ($hosted) {
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'pharmeasyadmin');
        define('DB_PASSWORD', 'Ph@rmE@sy');
        define('DB_DATABASE', 'db_pharmeasy');
    } else {
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'MySql1!$');
        define('DB_DATABASE', 'db_pharmacy');
    }
?>