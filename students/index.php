<?php
    // require_once "db.php";
    require_once("db.php");
    // require_once,require,include_once,include

    $sql = "SELECT * FROM students";
    $result = mysqli_query($db,$sql);
    // mysqli_query($db,"SELECT * FROM students");

    /*
        mysqli_fetch_assoc()
        mysqli_fetch_row()
        mysqli_fetch_array()
    */ 
    // $rows = array();
    // while($row = mysqli_fetch_assoc($result)){
    //     // print_r($row);
    //     // echo $row["name"];
    //     // echo "<hr>";
    //     $rows[] = $row;
    // }
    // foreach($rows as $stu){
    //     print_r($stu["name"]);
    // }
    $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    foreach($row as $student){
        print_r($student["name"]);
        echo "<hr>";
    }
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
    <a href="create.php">新增學員資料</a>
</body>
</html>