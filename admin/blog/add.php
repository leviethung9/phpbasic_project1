<?php 
    require_once('../database/connect.php');
?>
<?php
    // lay ra chuyen muc bai viet
    $sql = "SELECT * FROM cate_post ";
    $query = mysqli_query($connect,$sql);
   
if(isset($_POST['btnadd'])){
    $title = $_POST['title'];
    $cate_name = $_POST['cate_name'];
    $img = $_FILES['txtimg']['name'];
    $img_tmp = $_FILES['txtimg']['tmp_name'];
    $content = $_POST['content1'];

    $sql = "INSERT INTO post (id_cate_post, title,  avatar, content) VALUES ('$cate_name', '$title', '$img', '$content') ";

    $query = mysqli_query($connect,$sql);

    move_uploaded_file($img_tmp, '../uploads2/'.$img);

    header("location:index.php?page_layout=blog");
}
?>

    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <div class="card" style="width: 80%;">
        <div class="card-body">
            <h5 class="card-title">Thêm bài viết</h5>
            <form action="#" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group">
                    <label for=""> Thuộc chuyên mục </label>
                    <br>
                    <select name="cate_name" id="" class="form-control">
                        <?php while ($name_cate_post = mysqli_fetch_assoc($query)) { ?>
                            <option  value="<?= $name_cate_post['cate_name'] ?>"><?= $name_cate_post['cate_name'] ?> </option>
                        <?php   } ?>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for=""> Tiêu đề bài viết </label>
                    <input type="text" class="form-control" name="title" >
                </div>
                <div class="form-group">
                    <label for=""> Ảnh bài viết </label>
                    <input type="file" class="form-control" name="txtimg" >
                </div>
                <div class="form-group">
                    <label for=""> Nội dung bài viết </label>
                    <textarea name="content1" id="content1" cols="50" rows="20">
                    <script type="text/javascript">
					CKEDITOR.replace('content1');
				</script>
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" value="Thêm" name="btnadd" class="btn btn-primary"> Thêm  </button>
                </div>

            </form>
        </div>
    </div>
</div>