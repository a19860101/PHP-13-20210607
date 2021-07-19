<?php
    session_start();
    function pdo(){
        $db_host = "localhost";
        $db_user = "admin";
        $db_pw = "admin";
        $db_name = "php-13-20210607";
        $db_charset = "utf8mb4";

        $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";

        try {
            $pdo = new PDO($dsn,$db_user,$db_pw);
            
            $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $pdo;
    }
    function now(){
        date_default_timezone_set("Asia/Taipei");
        $now = date("Y-m-d H:i:s");
        return $now;
    }