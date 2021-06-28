<?php
    function index(){
        $sql = "SELECT * FROM students";
        $stmt = pdo()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
    function show(){
        extract($_REQUEST);
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }
    function edit(){
        extract($_REQUEST);
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }