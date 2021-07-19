<?php
    function userStore($request){
        extract($request);
        $sql_check = "SELECT * FROM users WHERE user = ?";
        $stmt_check = pdo()->prepare($sql_check);
        $stmt_check->execute([$user]);
    
        if($stmt_check->rowCount() > 0){
            echo "<script>alert('此帳號已被使用，請重新註冊');</script>";
            header("refresh:0;url=register.php");
            return;
        }
    
    
        $sql = "INSERT INTO users(user,pw)VALUES(?,?)";
        $stmt = pdo()->prepare($sql);
        $pw = md5(sha1($pw));
        $stmt->execute([$user,$pw]);
    
        echo "<script>alert('註冊成功，請重新登入');</script>";
        header("refresh:0;url=register.php");
    }
    function auth($request){
        extract($request);
        $sql = "SELECT * FROM users WHERE user = ?";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$user]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$row){
            echo "<script>alert('帳號或密碼錯誤，請重新登入');</script>";
            header("refresh:0;url=login.php");
            return ;
        }

        if($row["pw"] == md5(sha1($pw))){
            $_SESSION["AUTH"] = $row;
            echo "<script>alert('歡迎登入');</script>";
            header("refresh:0;url=../index.php");
        }else{
            echo "<script>alert('帳號或密碼錯誤，請重新登入');</script>";
            header("refresh:0;url=login.php");
        }
    }