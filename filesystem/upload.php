<?php
    require_once("pdo.php");
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

    // 定義圖片檔名
    $img = md5(time()).".".$ext;
    
    //如果資料夾不存在，就建立資料夾
    if(!is_dir("images")){
        mkdir("images");
    }

    $target = "images/{$img}";

    //資料庫
    $sql = "INSERT INTO gallery(name,img)VALUES(?,?)";
    $stmt = $pdo->prepare($sql);

    // 如果使用者有輸入圖片標題，就使用使用者輸入的標題
    if($_POST["name"] != ""){
        $name = $_POST["name"];
    }


    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
            $stmt->execute([$name,$img]);
            header("refresh:0;url=index.php"); 
        }else{
            echo "上傳失敗";
        }
    }else{
        echo "上傳錯誤";
    }

