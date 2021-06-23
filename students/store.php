<?php
//方法一
//     require_once("db.php");
//     extract($_REQUEST);

//     $skills = implode(",",$skills);
//     $sql = "INSERT INTO students(name,mail,gender,edu,skills,content)
//             VALUES('$name','$mail','$gender','$edu','$skills','$content')";
//     mysqli_query($db,$sql);

//     // header("location:index.php");
//     // header("refresh:3;url=index.php");
    
    
//     echo "<script>alert('資料已新增!');</script>";
//     header("refresh:0;url=index.php");
    // 方法二 
	require_once("db.php");
	extract($_REQUEST);

	$skills = implode(",",$skills);
	// $sql = "INSERT INTO students(name,mail,gender,edu,skills,content)
	//         VALUES('$name','$mail','$gender','$edu','$skills','$content')";
	// $db->query($sql);

	$sql = "INSERT INTO students(name,mail,gender,edu,skills,content)VALUES(?,?,?,?,?,?)";
	$stmt = $db->prepare($sql);
	$stmt->bind_param("ssssss",$name,$mail,$gender,$edu,$skills,$content);
	$stmt->execute();
	echo "<script>alert('資料已新增!');</script>";
	header("refresh:0;url=index.php");      