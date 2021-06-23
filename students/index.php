<?php
    // 方法一
    
    // // require_once "db.php";
    // require_once("db.php");
    // // require_once,require,include_once,include

    // $sql = "SELECT * FROM students";
    // $result = mysqli_query($db,$sql);
    // // mysqli_query($db,"SELECT * FROM students");

    // /*
    //     mysqli_fetch_assoc()
    //     mysqli_fetch_row()
    //     mysqli_fetch_array()
    // */ 
    // // $rows = array();
    // // while($row = mysqli_fetch_assoc($result)){
    // //     // print_r($row);
    // //     // echo $row["name"];
    // //     // echo "<hr>";
    // //     $rows[] = $row;
    // // }
    // // foreach($rows as $stu){
    // //     print_r($stu["name"]);
    // // }
    // $row = mysqli_fetch_all($result,MYSQLI_ASSOC);

    // 方法二
    require_once("db.php");
    $sql = "SELECT * FROM students";
    $result = $db->query($sql);
    // $students = array();
    // while($row = $result->fetch_assoc()){
    //     $students[] = $row;
    // }
    $row = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border-collapse: collapse;
            border: 1px solid #999;
            padding:10px;
        }
    </style>
</head>
<body>
    <a href="create.php">新增學員資料</a>
    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>MAIL</th>
            <th>性別</th>
            <th>動作</th>
        </tr> 
        <?php foreach($row as $student){ ?>
        
        <tr>
            <td><?php echo $student["id"]; ?></td>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["mail"]; ?></td>
            <td><?php echo $student["gender"]; ?></td>
            <td>
                <a href="show.php?id=<?php echo $student["id"]; ?>">檢視</a>
            </td>
        </tr>

        <?php } ?>
        
        <?php
            // foreach($row as $student){
            //     echo "<tr>";
            //     echo "<td>{$student["id"]}";
            //     echo "<td>{$student["name"]}";
            //     echo "<td>{$student["mail"]}";
            //     echo "</tr>";
            // }
        ?>
    </table>
</body>
</html>