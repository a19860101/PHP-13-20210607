<?php
    session_start();

    $_SESSION["AUTH"] = $_POST;

    // print_r($_SESSION["AUTH"]);

    extract($_SESSION["AUTH"]);

    if($pw == "1234"){
        echo "登入成功";
    }else{
        echo "登入失敗";
    }