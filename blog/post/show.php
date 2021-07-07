<?php
    include("../pdo.php");
    include("function.php");
    $post = show($_REQUEST);
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2  class="mb-3"><?php echo $post["title"]; ?></h2>
            <div class="mb-3">
                <?php echo $post["content"]; ?>
            </div>
            <div class="mb-3">
                最後更新時間 <?php echo $post["updated_at"]; ?>
            </div>
            <a href="<?php echo $webroot; ?>" class="btn btn-success">文章列表</a>
        </div>
    </div>
</div>

<?php include("../template/footer.php"); ?>
