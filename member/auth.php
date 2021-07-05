<?php
    require_once("pdo.php");
    session_start();
   
    extract($_REQUEST);
    $sql = "SELECT * FROM users WHERE user = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row["pw"] == $pw){
        $_SESSION["AUTH"] = $row;
        echo "<script>alert('歡迎登入');</script>";
        header("refresh:0;url=index.php");
    }else{
        echo "<script>alert('帳號或密碼錯誤，請重新登入');</script>";
        header("refresh:0;url=index.php");
    }