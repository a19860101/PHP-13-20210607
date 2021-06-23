<?php
    require_once("db.php");
    extract($_REQUEST);
    // echo $id;
    // $id = $_REQUEST["id"];
    $sql = "DELETE FROM students WHERE id = {$id}";
    mysqli_query($db,$sql);
    echo "<script>alert('資料已刪除!');</script>";
    header("refresh:0;url=index.php");