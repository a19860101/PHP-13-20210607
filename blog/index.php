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
            <h3 class="mb-3"><?php echo $post["title"]; ?></h3>
            <div>
                分類:
                <a href="post/index_with_category.php?id=<?php echo $post["category_id"];?>">
                    <?php echo $post["c_title"];?>
                </a> 
            </div>
            <div class="mb-3">
                <?php
                    $content = strip_tags($post["content"]);
                    echo mb_substr($content,0,100); 
                ?>...
            </div>
            <div class="mb-3">
                <a href="post/show.php?id=<?php echo $post["id"];?>" class="btn btn-primary">繼續閱讀</a>
            </div>
            <div>
                文章建立時間 <?php echo $post["created_at"]; ?>
                <br>
                最後更新時間 <?php echo $post["updated_at"]; ?>

            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("template/footer.php"); ?>