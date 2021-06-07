<?php
    // 運算子

    $x = 100;
    $y = 60;
    // 算術運算子 / 數學運算子
    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y; //求餘數
    echo "<br>";
    echo "<hr>";

    // 比較運算子
    var_dump($x > $y) ;
    echo "<br>";
    var_dump($x < $y) ;
    echo "<br>";
    var_dump($x >= $y) ;
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($x == $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x <> $y);
    echo "<hr>";

    // 指定運算子
    echo $x = $y;
    echo "<br>";
    echo $x += $y; // $x = $x + $y;
    echo "<br>";
    echo $x -= $y; // $x = $x - $y;
    echo "<br>";
    echo $x *= $y; // $x = $x * $y;
    echo "<br>";
    echo $x /= $y; // $x = $x / $y;
    echo "<br>";
    echo $x %= $y; // $x = $x % $y;
    echo "<br>";
    echo $x;
    echo "<hr>";
    // 邏輯運算子

    var_dump($x > 0 && $y > 0);//AND
    echo "<br>";
    var_dump($x > 0 || $y > 0);//OR
    echo "<br>";
    var_dump(!$y); //NOT
    echo "<hr>";
    /* 
        isset() 判斷括號內存在
        !isset() 判斷括號內不存在 
    */

    // 字串運算子
    $a = "HELLO";
    $b = "PHP";
    $user = "Mary";
    $num = 123;

    // echo $a." ".$b;
    // echo $user."你好 您是第".$num."位訪客";

    echo "{$user}你好&nbsp;&nbsp;&nbsp;&nbsp;您是第{$num}位訪客";