<?php
    include("../pdo.php");
    include("function.php");
    update($_REQUEST);
    $id = $_REQUEST["id"];
    echo "<script>alert('文章已更新');</script>";
    header("refresh:0;url=show.php?id={$id}");