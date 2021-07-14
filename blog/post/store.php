<?php
    include("../pdo.php");
    include("function.php");

    $img = uploadCover($_FILES["cover"]);
    store($_REQUEST,$img);

    // echo "<script>alert('文章已建立');</script>";
    // header("refresh:0;url=../index.php");


