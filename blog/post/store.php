<?php
    include("../pdo.php");
    include("function.php");
    store($_REQUEST);

    echo "<script>alert('文章已建立');</script>";
    header("refresh:0;url=../index.php");