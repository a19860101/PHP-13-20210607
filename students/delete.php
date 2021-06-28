<?php
    //方法一
    // require_once("db.php");
    // extract($_REQUEST);
    // // echo $id;
    // // $id = $_REQUEST["id"];
    // $sql = "DELETE FROM students WHERE id = {$id}";
    // mysqli_query($db,$sql);
    // echo "<script>alert('資料已刪除!');</script>";
    // header("refresh:0;url=index.php");

    //方法二
    require_once("db.php");
	extract($_REQUEST);
    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    echo "<script>alert('資料已刪除!');</script>";
    header("refresh:0;url=index.php");