<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 900px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
        }
        .box {
            box-sizing: border-box;
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            
        }
        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            vertical-align: middle;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div>
        <a href="index.php">上傳圖片</a>
        
    </div>
    <div class="container">
    <?php
        $imgs = glob("images/*");
        foreach($imgs as $img){
    ?>
        <div class="box">
            <img src="<?php echo $img;?>">
            <form action="" method="post">
                <input type="hidden" name="img" value="<?php echo $img;?>">
                <input type="submit" value="刪除">
            </form>
        </div>
    <?php } ?>
    </div>
</body>
</html>