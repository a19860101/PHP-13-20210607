<?php
    require_once("pdo.php");

    extract($_REQUEST);
    $sql = "INSERT INTO users(user,pw)VALUES(?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user,$pw]);

    echo "<script>alert('註冊成功，請重新登入');</script>";
    header("refresh:0;url=index.php");

