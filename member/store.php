<?php
    require_once("pdo.php");

    extract($_REQUEST);

    $sql_check = "SELECT * FROM users WHERE user = ?";
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute([$user]);

    if($stmt_check->rowCount() > 0){
        echo "<script>alert('此帳號已被使用，請重新註冊');</script>";
        header("refresh:0;url=register.php");
        return;
    }


    $sql = "INSERT INTO users(user,pw)VALUES(?,?)";
    $stmt = $pdo->prepare($sql);
    $pw = md5(sha1($pw));
    $stmt->execute([$user,$pw]);

    echo "<script>alert('註冊成功，請重新登入');</script>";
    header("refresh:0;url=index.php");

