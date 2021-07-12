<?php
    include("../pdo.php");
    include("function.php");
    $post = edit($_REQUEST);
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>編輯文章</h2>
            <hr>
        </div>
        <div class="col-8">
            <form action="update.php" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $post["title"];?>">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="1" <?php echo $post["category_id"] == 1?"selected":""; ?>>科技</option>
                        <option value="2" <?php echo $post["category_id"] == 2?"selected":""; ?>>生活</option>
                        <option value="3" <?php echo $post["category_id"] == 3?"selected":""; ?>>美食</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"><?php echo $post["content"]; ?></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $post["id"];?>">
                <input type="submit" value="儲存文章" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content'
    });
</script>
<?php include("../template/footer.php"); ?> 