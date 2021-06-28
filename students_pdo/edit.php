<?php
    // 方法一
    // require_once("db.php");
    // extract($_REQUEST);
    // $sql = "SELECT * FROM students WHERE id = {$id}";
    // $result = mysqli_query($db,$sql);
    // $student = mysqli_fetch_assoc($result);

    // 方法二
    require_once("db.php");
    extract($_REQUEST);
    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();

    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
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
    <h1>編輯資料</h1>
    <form action="update.php" method="post">
        <div>
            <label for="name">姓名</label>
            <input type="text" id="name" name="name" value="<?php echo $student["name"]; ?>">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="text" id="mail" name="mail" value="<?php echo $student["mail"]; ?>">
        </div>
        <div>
            <label for="gender">性別</label>
            
            <input type="radio" name="gender" value="男" id="male" <?php if($student["gender"]=="男"){echo "checked";}?>>
            <label for="male">男</label>
            
            <input type="radio" name="gender" value="女" id="female" <?php echo $student["gender"]=="女"?"checked":""; ?>>
            <label for="female">女</label>
        </div>
        <div>
            <label for="edu">學歷</label>
            <select name="edu" id="edu">
                <option value="">--請選擇--</option>
                <option value="國小" <?php echo $student["edu"]=="國小"?"selected":""; ?>>國小</option>
                <option value="國中" <?php echo $student["edu"]=="國中"?"selected":""; ?>>國中</option>
                <option value="高中職" <?php echo $student["edu"]=="高中職"?"selected":""; ?>>高中職</option>
                <option value="大專院校" <?php echo $student["edu"]=="大專院校"?"selected":""; ?>>大專院校</option>
                <option value="研究所以上" <?php echo $student["edu"]=="研究所以上"?"selected":""; ?>>研究所以上</option>
            </select>
        </div>
        <div>
            <label for="skills">專長</label>
            <?php $skills = explode(",",$student["skills"]); ?>
            <input type="checkbox" name="skills[]" value="平面設計" id="design" <?php echo in_array("平面設計",$skills)?"checked":"";?>>
            <label for="design">平面設計</label>

            <input type="checkbox" name="skills[]" value="網頁設計" id="web" <?php echo in_array("網頁設計",$skills)?"checked":"";?>>
            <label for="web">網頁設計</label>

            <input type="checkbox" name="skills[]" value="影視剪輯" id="video" <?php echo in_array("影視剪輯",$skills)?"checked":"";?>>
            <label for="video">影視剪輯</label>
        </div>
        <div>
            <label for="content">備註</label>
            <textarea name="content" id="content" cols="60" rows="10"><?php echo $student["content"]; ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $student["id"];?>">
        <input type="submit" value="送出">
        <input type="button" value="取消" onclick="history.back()">
    </form>
    <hr>
</body>
</html>