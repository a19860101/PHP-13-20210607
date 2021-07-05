<?php
    session_start();

    $_SESSION["USER"] = [
        "id" => 1,
        "name" => "John",
        "password" => "qwerty",
        "mail" => "john@gmail.com"
    ];

    extract($_SESSION["USER"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // print_r( $_SESSION["USER"]); 
        // echo $_SESSION["USER"]["password"]    
        // echo $name;
        echo $password;
    ?>

</body>
</html>