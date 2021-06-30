<?php

    // print_r($_FILES["img"]);
    echo $_FILES["img"]["name"];
    echo $_FILES["img"]["type"];
    echo $_FILES["img"]["size"];
    echo $_FILES["img"]["error"];
    echo $_FILES["img"]["tmp_name"];
    
    extract($_FILES["img"]);
    echo $name;
    echo "<br>";
    echo $type;
    echo "<br>";
    echo $size;
    echo "<br>";
    echo $error;
    echo "<br>";
    echo $tmp_name;

