<?php
    session_start();
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
    <nav>
        <?php if(isset($_SESSION["AUTH"])){ ?>
            <?php echo $_SESSION["AUTH"]["user"]."你好"; ?>
            <a href="logout.php">登出</a>

            <?php if($_SESSION["AUTH"]["role"] == 0){ ?>
            <a href="admin.php">後台管理</a>
            <?php } ?>

        <?php }else{ ?>
            <a href="register.php">註冊</a>
            <a href="login.php">登入</a>
        <?php } ?>
    </nav>
</body>
</html>