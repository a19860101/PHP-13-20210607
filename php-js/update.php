<?php
    require_once("pdo.php");
    require_once("function.php");
    update($_REQUEST);
    echo "<script>alert('資料已更新!');</script>";
    header("refresh:0;url=index.php");