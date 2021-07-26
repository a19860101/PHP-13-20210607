<?php
    include("../pdo.php");
    include("function.php");

    // $img = uploadCover($_FILES["cover"]);
    $img = mb_substr($_REQUEST["cover"],7);
    store($_REQUEST,$img);
    
    echo "<script>alert('文章已建立');</script>";
    header("refresh:0;url=../index.php");


