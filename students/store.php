<?php
    require_once("db.php");
    extract($_REQUEST);

    $skills = implode(",",$skills);
    $sql = "INSERT INTO students(name,mail,gender,edu,skills,content)
            VALUES('$name','$mail','$gender','$edu','$skills','$content')";
    mysqli_query($db,$sql);
    