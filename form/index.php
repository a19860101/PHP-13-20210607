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
        <div>
            <label for="gender">性別</label>
            
            <input type="radio" name="gender" value="男" id="male">
            <label for="male">男</label>
            
            <input type="radio" name="gender" value="女" id="female">
            <label for="female">女</label>
        </div>
        <div>
            <label for="edu">學歷</label>
            <select name="edu" id="edu">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
        <label for="skills">專長</label>

        <input type="checkbox" name="skills[]" value="平面設計" id="design">
        <label for="design">平面設計</label>

        <input type="checkbox" name="skills[]" value="網頁設計" id="web">
        <label for="web">網頁設計</label>

        <input type="checkbox" name="skills[]" value="影視剪輯" id="video">
        <label for="video">影視剪輯</label>
        </div>
        <input type="submit" value="送出">
    </form>
    <hr>
    <!-- <h1>GET</h1>
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
    <a href="result.php?name=hellophp&mail=asdf@yahoo.com.tw">點我點我</a> -->
</body>
</html>