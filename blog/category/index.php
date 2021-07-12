<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>分類管理</h2>
            <hr>
        </div>
        <div class="col-6">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">分類標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">分類英文標題</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="新增分類">
            </form>
        </div>
        <div class="col-6"></div>
    </div>
</div>
<?php include("../template/footer.php"); ?>