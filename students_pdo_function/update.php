<?php
    require_once("pdo.php");
    extract($_REQUEST);
    $skills = implode(",",$skills);
    $sql = "UPDATE students SET name=?,mail=?,gender=?,edu=?,skills=?,content=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$mail,$gender,$edu,$skills,$content,$id]);

    echo "<script>alert('資料已更新!');</script>";
    header("refresh:0;url=index.php");