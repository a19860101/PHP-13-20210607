<?php
    include("../pdo.php");
    include("function.php");
    // print_r($_REQUEST);
    categoryStore($_REQUEST);

    header("location:index.php");