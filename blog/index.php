<?php
    include("pdo.php");
    include("post/function.php");
    $posts = index();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>文章列表</h2>
            <hr>
        </div>
        <?php foreach($posts as $post){ ?>
        <div class="col-8 border p-4 my-3 rounded">
            <h3><?php echo $post["title"]; ?></h3>
            <div>
                <?php echo $post["content"]; ?>
            </div>
            <div>
                最後更新時間 <?php echo $post["updated_at"]; ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("template/footer.php"); ?>