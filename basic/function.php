<?php
    // 函式 function
    // function test(){
    //     echo "hello test";
    // }

    // function test2(){
    //     return "Hello test2";
    // }

    // var_dump(test());

    // var_dump(test2());


    function test($a){
        return $a * 1.05;
    }

    // echo test(100);


    function area($w,$h){
        return $w * $h;
    }

    // echo area(123,100);

    function us($dollar,$rate = 30){
        return $dollar*$rate;
    }
    echo us(100);
