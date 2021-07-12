<?php
function now(){
    date_default_timezone_set("Asia/Taipei");
    $now = date("Y-m-d H:i:s");
    return $now;
}
// function index(){
//     $sql = "SELECT * FROM posts ORDER BY created_at DESC";
//     $stmt = pdo()->prepare($sql);
//     $stmt->execute();
//     $row = $stmt->fetchAll();
//     return $row;
// }
function store($request){
    extract($request);
    $sql = "INSERT INTO categories(title,slug,created_at)VALUES(?,?,?)";
    $stmt = pdo()->prepare($sql);
    $stmt->execute([$title, $slug, now()]);
}

// function delete($request){
//     extract($request);
//     $sql = "DELETE FROM posts WHERE id = ?";
//     $stmt = pdo()->prepare($sql);
//     $stmt->execute([$id]);
// }