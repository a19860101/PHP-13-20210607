<?php
    $web = ["HTML","CSS","Javascript","PHP",'MySQL'];
    $user = [
        "id"    => 1,
        "name"  => "John",
        "mail"  => "john@gmail.com",
    ];

    //count() 計算陣列內容的數量

    // echo count($web);
    // echo count($user);

    //implode() 陣列->字串

    // echo implode(",",$web);
    // echo implode("---",$web);

    // echo implode(",",$user);


    $str = "HELLO PHP MYSQL!!";

    //explode() 字串->陣列
    // $str_array = explode("P",$str);
    // print_r($str_array);

    // in_array() 判斷陣列內的值是否存在

    // var_dump(in_array("apple",$web));
    // var_dump(in_array("HTML",$web));
    // var_dump(in_array("John",$user));

    // is_array() 判斷是否為陣列
    // var_dump(is_array($str));

    // extract() 解構

    // extract($user);
    // echo $id;
    // echo $name;
    // echo $mail;

    // compact() 

    $title = "iPhone 12";
    $size = "128GB";
    $color = "Blue";

    // $iphone = [$title,$size,$color];

    // print_r($iphone);

    // $iphone = compact("title","size","color");
    // print_r($iphone);


    //shuffle()


    shuffle($web);

    print_r($web);