<?php

    // 方法一
    // $db_host = "localhost";
    // $db_user = "admin";
    // $db_pw = "admin";
    // $db_name = "php-13-20210607";

    // $db = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("Database Error!!");

    // mysqli_query($db , "SET NAMES utf8mb4");

    // 方法二
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php-13-20210607";
    
    //建立mysqli物件實體
    $db = new mysqli($db_host,$db_user,$db_pw,$db_name);

    // print_r($db);

    if($db->connect_errno){
        echo $db->connect_error;
        return ;
    }

    $db->query("SET NAMES utf8mb4");