<?php
    // 方法一
    // require_once("db.php");
    // extract($_REQUEST);
    // $skills = implode(",",$skills);
    // $sql = "UPDATE students 
    //         SET
    //         name    = '$name',
    //         mail    = '$mail',
    //         gender  = '$gender',
    //         edu     = '$edu',
    //         skills  = '$skills',
    //         content = '$content'
    //         WHERE 
    //             id = {$id}
    //         ";
    // mysqli_query($db,$sql);

    // echo "<script>alert('資料已更新!');</script>";
    // header("refresh:0;url=index.php");

    // 方法二
    require_once("db.php");
    extract($_REQUEST);
    $skills = implode(",",$skills);
    $sql = "UPDATE students SET name=?,mail=?,gender=?,edu=?,skills=?,content=? WHERE id=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ssssssi",$name,$mail,$gender,$edu,$skills,$content,$id);
    $stmt->execute();

    echo "<script>alert('資料已更新!');</script>";
    header("refresh:0;url=index.php");