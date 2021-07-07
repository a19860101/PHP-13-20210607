<?php
    function store($request){
        extract($request);
	    $sql = "INSERT INTO posts(title,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,NOW(),NOW())";
	    $stmt = pdo()->prepare($sql);
        $user_id = 1;
	    $stmt->execute([$title,$content,$category_id,$user_id]);
    }