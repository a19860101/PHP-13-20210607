<?php

    // print_r($_POST);
    // echo $_POST["mail"];

    // print_r($_GET);

    if($_POST){
        // print_r($_POST);
        echo $_POST["name"];
    }else{
        // print_r($_GET);
        echo $_GET["name"];
        echo $_GET["mail"];
    }