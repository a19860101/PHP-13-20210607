<?php
    require_once("db.php");
    // $id = $_GET["id"];
    // $id = $_REQUEST["id"];
    extract($_REQUEST);
   
    $sql = "SELECT * FROM students WHERE id = {$id}";
    $result = mysqli_query($db,$sql);
    $student = mysqli_fetch_assoc($result);
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
    <h2><?php echo $student["name"]; ?> 基本資料</h2>
    <ul>
        <li>姓名: <?php echo $student["name"];?></li>
        <li>MAIL: <?php echo $student["mail"];?></li>
        <li>性別: <?php echo $student["gender"];?></li>
        <li>學歷: <?php echo $student["edu"];?></li>
        <li>專長: <?php echo $student["skills"];?></li>
        <li>備註: <?php echo $student["content"];?></li>
    </ul>
    <a href="index.php">學員列表</a>

    <form action="delete.php" method="post">
        <input type="hidden" value="<?php echo $student["id"];?>" name="id">
        <input type="submit" value="刪除">
    </form>
</body>
</html>