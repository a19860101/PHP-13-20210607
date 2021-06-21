<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php-13-20210607";

    $db = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("Database Error!!");

    mysqli_query($db , "SET NAMES utf8mb4");