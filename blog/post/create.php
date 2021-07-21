<?php
    include("../pdo.php");
    include("../category/function.php");
    $categories = categoryIndex();
?>
<?php include("../template/header.php"); ?>
<?php include("../template/nav.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
<style>
    .gallery {
        display: none;
    }
    .gallery-overlay {
        width: 100%;
        height: 100%;
        position: fixed;
        background-color: rgba(0,0,0,.8);
        top: 0;
        left: 0;
        z-index: 8888;
    }
    .gallery-container {
        position: fixed;
        width: 80%;
        height: 80%;
        background-color: #fff;
        top: 10%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 8889;
        padding: 30px;
    }
    .close {
        position: absolute;
        right: 30px;
        top: 30px;
    }
    .gallery-items {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .gallery-items label {
        flex:0 0 200px;
        height: 150px;
        padding: 10px;

    }
    .gallery-items label img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2>新增文章</h2>
            <hr>
        </div>
        <div class="col-8">
            <form action="store.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <!-- <div class="mb-3">
                    <label for="cover" class="form-label">封面圖片</label>
                    <input type="file" name="cover" id="cover">
                </div> -->
                <div class="mb-3">
                    <input type="hidden" name="cover" value="">
                    <a href="#" class="selectCover">選擇圖片</a>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">分類</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <?php foreach($categories as $category){ ?>
                        <option value="<?php echo $category["id"];?>"><?php echo $category["title"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">文章內容</label>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<div class="gallery">
    <div class="gallery-overlay"></div>
    <div class="gallery-container">
        <i class="fas fa-times fa-3x close"></i>
        <!-- <a href="#" class="close">close</a> -->
        <div class="gallery-items">
            <?php 
                $galleries = glob("images/*.{jpeg,jpg,png,gif,webp}",GLOB_BRACE);
                foreach($galleries as $gallery){
            ?>
            <label for="<?php echo $gallery;?>">
                <img src="<?php echo $gallery;?>" width="150">
                <input type="radio" name="cover" class="cover" value="<?php echo $gallery;?>" id="<?php echo $gallery;?>">
            </label>
            <?php } ?>
        </div>
        <a href="#" class="selected btn btn-primary">送出</a>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        language: 'zh_TW',
        height: '400px',
        toolbar: 'removeformat | image code link | styleselect bullist numlist | bold italic forecolor underline strikethrough |'+
        '|alignleft aligncenter alignright ',
        plugins: 'image code link lists imagetools ',
        // menubar: 'file edit view insert format tools'
        image_title: true,
        automatic_uploads: true,
        images_upload_url:'postAcceptor.php',
        file_picker_types: 'image',
        /* and here's our custom image picker*/
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            /*
            Note: In modern browsers input[type="file"] is functional without
            even adding it to the DOM, but that might not be the case in some older
            or quirky browsers like IE, so you might want to add it to the DOM
            just in case, and visually hide it. And do not forget do remove it
            once you do not need it anymore.
            */

            input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function () {
                /*
                Note: Now we need to register the blob in TinyMCEs image blob
                registry. In the next release this part hopefully won't be
                necessary, as we are looking to handle it internally.
                */
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                /* call the callback and populate the Title field with the file name */
                cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
            };

            input.click();
        },
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script>
    $(function(){
        $('.selectCover').click(function(){
            console.log('success');
            $('.gallery').show();
        });
        $('.close').click(function(){
            $('.gallery').hide();
        })
        $('.selected').click(function(){
            $.ajax({
                url:'create.php',
                type:'get',
                data:{
                    cover:$('.cover:checked').val()
                },
                success:function(){
                    location.href=this.url;
                    $('.gallery').hide();
                }
            })
        })
    })
</script>
<?php include("../template/footer.php"); ?>