<?php

    function index(){
        $sql = "SELECT posts.*,categories.title AS c_title FROM posts LEFT JOIN categories ON posts.category_id = categories.id ORDER BY created_at DESC";
        $stmt = pdo()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
    function indexWithCategory($request){
        extract($request);
        $sql = "SELECT posts.*,categories.title AS c_title FROM posts LEFT JOIN categories ON posts.category_id = categories.id WHERE category_id = ? ORDER BY created_at DESC";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetchAll();
        return $row;
    }
    function show($request){
        extract($request);
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // PDO::FETCH_ASSOC,PDO::FETCH_BOTH,PDO::FETCH_NUM
        return $row;
    }
    function edit($request){
        extract($request);
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
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

    function delete($request){
        extract($request);
        $sql = "DELETE FROM posts WHERE id = ?";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
    }

    function update($request){
        extract($request);
        $sql = "UPDATE posts SET title=? , content=? , category_id=? , updated_at=? WHERE id = ?";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$title, $content, $category_id, now(), $id]);
    }