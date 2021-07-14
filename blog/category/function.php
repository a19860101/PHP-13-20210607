<?php
function categoryIndex(){
    $sql = "SELECT * FROM categories ORDER BY created_at DESC";
    $stmt = pdo()->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll();
    return $row;
}
function categoryStore($request){
    extract($request);
    $sql = "INSERT INTO categories(title,slug,created_at)VALUES(?,?,?)";
    $stmt = pdo()->prepare($sql);
    $stmt->execute([$title, $slug, now()]);
}

function categoryDelete($request){
    extract($request);
    $sql = "DELETE FROM categories WHERE id = ?";
    $stmt = pdo()->prepare($sql);
    $stmt->execute([$id]);
}