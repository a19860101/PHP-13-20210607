<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">圖片標題</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">圖片上傳</label>
            <input type="file" name="img">
        </div>
        <input type="submit" value="上傳">
    </form>
    <hr>
    <a href="list.php">圖片列表</a>
</body>
</html>