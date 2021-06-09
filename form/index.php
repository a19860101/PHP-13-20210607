<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POST</h1>
    <form action="result.php" method="post">
        <div>
            <label for="name">姓名</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="text" id="mail" name="mail">
        </div>
        <input type="submit" value="送出">
    </form>
    <hr>
    <h1>GET</h1>
    <form action="result.php" method="get">
        <div>
            <label for="name">姓名</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="text" id="mail" name="mail">
        </div>
        <input type="submit" value="送出">
    </form>
    <p>
        在表單內使用get的唯一狀態就是搜尋
    </p>
    <a href="result.php?name=hellophp&mail=asdf@yahoo.com.tw">點我點我</a>
</body>
</html>