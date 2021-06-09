<?php

    //  陣列 array

    // $a = array();

    // $a[0] = "HTML";
    // $a[1] = "CSS";
    // $a[2] = "Javascript";
    // $a[3] = "PHP";

    // $a = array("HTML","CSS","Javascript","PHP");

    $a = ["HTML","CSS","Javascript","PHP",'MySQL'];

    // echo $a;
    // print_r($a);
    // echo $a[1];
    // var_dump($a);
    // echo count($a);
    // for($i=0;$i<count($a);$i++){
    //     echo $a[$i];
    // }
    // 陣列迭代
    foreach($a as $data){
        echo $data;
    }   
    echo  "<hr>";
    // 關聯陣列 

    $user = [
        "id"    => 1,
        "name"  => "John",
        "mail"  => "john@gmail.com",
    ];

    // print_r($user);
    // echo $user["name"];

    // foreach($user as $u){
    //     echo $u;
    //     echo "<br>";
    // }
    
    foreach($user as $key => $value){
        echo "{$key}:{$value}";
        echo "<br>";
    }