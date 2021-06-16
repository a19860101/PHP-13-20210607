<?php

    // print_r($_POST);
    // echo $_POST["mail"];

    // print_r($_GET);

    // if($_POST){
    //     // print_r($_POST);
    //     echo $_POST["name"];
    // }else{
    //     // print_r($_GET);
    //     echo $_GET["name"];
    //     echo $_GET["mail"];
    // }

    // print_r($_REQUEST);
    // echo $_REQUEST["name"];
    // echo $_REQUEST["mail"];

    // $name = $_REQUEST["name"];
    // $mail = $_REQUEST["mail"];

    // echo $_REQUEST["name"];
    // echo $_REQUEST["mail"];
    // echo $_REQUEST["gender"];
    // echo $_REQUEST["edu"];
    extract($_REQUEST);
    // echo $name;
    // echo $mail;
    // echo $gender;
    // echo $edu;
    // echo implode(",",$skills);
    // echo json_encode($skills);
    // echo $content;
   
    if($name == ""){
        echo "姓名為空";
        echo "<br>";
    }else{
        echo "姓名:{$name}";
        echo "<br>";
    }
    
    echo "Mail:{$mail}";
    echo "<br>";

    if(!isset($gender)){
        echo "請選擇性別";
        echo "<br>";
    }else{
        echo "性別:{$gender}";
        echo "<br>";
    }
    
    if($edu == ""){
        echo "請選擇教育程度";
        echo "<br>";
    }else{
        echo "教育程度:{$edu}";
        echo "<br>";
    }
    
    if(!isset($skills)){
        echo "請選擇專長";
        echo "<br>";
    }else{
        $skills = implode(",",$skills);
        echo "專長:{$skills}";
        echo "<br>";
    }
    
    echo "備註:{$content}";