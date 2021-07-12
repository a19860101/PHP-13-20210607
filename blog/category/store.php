<?php
    include("../pdo.php");
    include("function.php");
    // print_r($_REQUEST);
    store($_REQUEST);

    header("location:index.php");