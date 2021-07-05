<?php
    require_once("pdo.php");
    session_start();
   
    extract($_POST);
    $sql = "SELECT * FROM users WHERE user = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);

    $row = $stmt->fetch();

    print_r($row);