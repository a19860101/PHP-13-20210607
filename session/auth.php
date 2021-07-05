<?php
    session_start();

    if($_REQUEST["pw"] == "1234"){
        $_SESSION["AUTH"] = $_REQUEST;
        // echo "登入成功";
        echo "<script>alert('登入成功');</script>";
        header("refresh:0;url=index.php");    
    }else{
        // echo "登入失敗";
        echo "<script>alert('登入失敗');</script>";
        header("refresh:0;url=index.php");    
    }