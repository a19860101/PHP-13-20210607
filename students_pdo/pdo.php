<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php-13-20210607";
    $db_charset = "utf8mb4";

    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // dsn = Data Source Name

    $pdo = new PDO($dsn,$db_user,$db_pw);
    //建立pdo物件實體