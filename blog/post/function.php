<?php

    function index(){
        $sql = "SELECT posts.*,users.user,categories.title AS c_title FROM posts 
                LEFT JOIN categories ON posts.category_id = categories.id 
                LEFT JOIN users ON posts.user_id = users.id 
                ORDER BY created_at DESC";
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
    function store($request,$img){
        extract($request);
	    // $sql = "INSERT INTO posts(title,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,NOW(),NOW())";
	    $sql = "INSERT INTO posts(title,cover,content,category_id,user_id,created_at,updated_at)VALUES(?,?,?,?,?,?,?)";
	    $stmt = pdo()->prepare($sql);
        $user_id = $_SESSION["AUTH"]["id"];
	    $stmt->execute([$title,$img,$content,$category_id,$user_id,now(),now()]);
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
    function uploadCover($files){
        extract($files);
        if($name == ""){
            $img = null;
            return $img;
        }        
        $ext = pathinfo($name,PATHINFO_EXTENSION);
        if($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif" && $ext != "webp" && $ext != "svg"){
            echo "<script>alert('????????????????????????');</script>";
            header("refresh:0;url=../index.php"); 
            return ;
        }
    
        // ??????????????????
        $img = md5(time()).".".$ext;
        
        //?????????????????????????????????????????????
        if(!is_dir("images")){
            mkdir("images");
        }
    
        $target = "images/{$img}";
    
        if($error == 0){
            if(move_uploaded_file($tmp_name,$target)){
                echo "????????????";
                // header("refresh:0;url=../index.php"); 
                return $img;
            }else{
                echo "????????????";
            }
        }else{
            echo "????????????";
        }
    }