<?php
    function index(){
        $sql = "SELECT * FROM students";
        $stmt = pdo()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }