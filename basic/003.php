<?php
    // 判斷式
    $x = -10;

    // if($x > 0){
    //     echo "大於零";
    // }

    // if($x > 0){
    //     echo "大於零";
    // }else{
    //     echo "錯誤";
    // }

    // if($x > 0){
    //     echo "大於零";
    // }elseif($x < 0){
    //     echo "小於零";
    // }

    if($x > 0){
        echo "大於零";
    }elseif($x < 0){
        echo "小於零";
    }else{
        echo "零";
    }


    $a = 10;

    switch($a){
        case 0:
            echo 0;
            break;
        case 10:
            echo 10;
            break;
        case 100:
            echo 100;
            break;
        default:
            echo "ERROR";
    }

    switch(true){
        case $a > 0:
            echo "大於零";
            break;
        case $a < 0:
            echo "小於零";
            break;
        default:
            echo "ERROR";
    }

