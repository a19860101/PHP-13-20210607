<?php

    // print_r($_FILES["img"]);
    // echo $_FILES["img"]["name"];
    // echo $_FILES["img"]["type"];
    // echo $_FILES["img"]["size"];
    // echo $_FILES["img"]["error"];
    // echo $_FILES["img"]["tmp_name"];
    
    extract($_FILES["img"]);
    // echo $name;
    // echo "<br>";
    // echo $type;
    // echo "<br>";
    // echo $size;
    // echo "<br>";
    // echo $error;
    // echo "<br>";
    // echo $tmp_name;

    if($error == 0){
        if(move_uploaded_file($tmp_name,$name)){
            echo "上傳成功";
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上傳錯誤";
    }

