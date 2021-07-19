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
            <?php if(isset($_SESSION["AUTH"])){ ?>
                <?php if($post["user_id"] == $_SESSION["AUTH"]["id"]){ ?>
                <a href="edit.php?id=<?php echo $post["id"]; ?>" class="btn btn-info">編輯文章</a>
                <form action="delete.php" method="post" class="d-inline-block">
                    <input type="hidden" name="id" value="<?php echo $post["id"]; ?>">
                    <input type="submit" class="btn btn-danger" value="刪除文章" onclick="return confirm('確認刪除？')">
                </form>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</div>

<?php include("../template/footer.php"); ?>
