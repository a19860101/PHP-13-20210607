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

    $ext = pathinfo($name,PATHINFO_EXTENSION);
    // $filename = pathinfo($name,PATHINFO_FILENAME);
    // $basename = pathinfo($name,PATHINFO_BASENAME);
    // $dirname = pathinfo($name,PATHINFO_DIRNAME);

    // echo $ext;
    // echo "<br>";
    // echo $filename;
    // echo "<br>";
    // echo $basename;
    // echo "<br>";
    // echo $dirname;
    if($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif" && $ext != "webp" && $ext != "svg"){
        echo "<script>alert('請上傳正確的格式');</script>";
        header("refresh:0;url=index.php"); 
        return ;
    }

    $img = md5(time()).".".$ext;
   
    if(!is_dir("images")){
        mkdir("images");
    }

    $target = "images/{$img}";
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
            header("refresh:0;url=index.php"); 
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上傳錯誤";
    }

