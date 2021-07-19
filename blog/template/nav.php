<?php
    $webroot = "http://localhost/php-13-20210607/blog";
    $sql = "SELECT * FROM categories ORDER BY created_at DESC";
    $stmt = pdo()->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $webroot; ?>">句醬部落格</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>">文章列表</a>
                </li>
                
                <?php foreach($row as $c){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>/post/index_with_category.php?id=<?php echo $c["id"];?>"><?php echo $c["title"];?></a>
                </li>
                <?php } ?>

                <?php if(isset($_SESSION["AUTH"])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>/post/create.php">新增文章</a>
                </li>
                    <?php if($_SESSION["AUTH"]["role"] == 0){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $webroot; ?>/category/index.php">分類管理</a>
                    </li>
                    <?php } ?>
                <?php } ?>

            </ul>
            <ul class="navbar-nav ms-auto">
                <?php if(!isset($_SESSION["AUTH"])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>/auth/register.php">註冊會員</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>/auth/login.php">登入</a>
                </li>
                <?php } ?>

                <?php if(isset($_SESSION["AUTH"])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $_SESSION["AUTH"]["user"];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $webroot; ?>/auth/logout.php">登出</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>