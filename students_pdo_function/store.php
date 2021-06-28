<?php
    require_once("pdo.php");
	extract($_REQUEST);
	$skills = implode(",",$skills);
	$sql = "INSERT INTO students(name,mail,gender,edu,skills,content)VALUES(?,?,?,?,?,?)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$name,$mail,$gender,$edu,$skills,$content]);

	echo "<script>alert('資料已新增!');</script>";
	header("refresh:0;url=index.php");      