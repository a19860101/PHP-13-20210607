<?php
    include("../pdo.php");
    include("function.php");

    categoryDelete($_REQUEST);

    header("location:index.php");