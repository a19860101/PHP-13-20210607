<?php
    include("../pdo.php");
    include("function.php");
    delete($_REQUEST);

    header("location:../index.php");