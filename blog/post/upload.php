<?php
    include("../pdo.php");
    include("function.php");

    uploadCover($_FILES["img"]);

    header("location:create.php");