<?php
    function now(){
        date_default_timezone_set("Asia/Taipei");
        $now = date("Y-m-d H:i:s");
        return $now;
    }
    function index(){
        $sql = "SELECT * FROM posts ORDER BY updated_at DESC";
        $stmt = pdo()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
    function store($request){
        extract($request);
	    // $sql = "INSERT INTO posts(title,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,NOW(),NOW())";
	    $sql = "INSERT INTO posts(title,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
	    $stmt = pdo()->prepare($sql);
        $user_id = 1;
	    $stmt->execute([$title,$content,$category_id,$user_id,now(),now()]);
    }