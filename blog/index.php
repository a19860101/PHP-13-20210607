<?php
    include("pdo.php");
    include("post/function.php");
    $posts = index();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<?php
    foreach($posts as $post){
        echo $post["title"];
        echo "<br>";
    }
?>
<?php include("template/footer.php"); ?>