<?php
    require_once("pdo.php");

    $sql = "SELECT * FROM student";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll();
    // $res = $pdo->exec($sql);
    // if($res){

    //    var_dump($res);
    // }else{
    //     echo $pdo->errorCode();
    //     echo "<br>";
    //     echo $pdo->errorInfo();
    // }

    // $row = $pdo->query($sql)->fetchAll();

    // $result = $pdo->query($sql);
    // $row = $result->fetchAll();

    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();
    // $row = array();
    // while($rows = $stmt->fetch()){
    //     $row[] = $rows;
    // }

    // try {
    //     $stmt->execute();
    //     $row = $stmt->fetchAll();
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }
    


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
</body>
</html>