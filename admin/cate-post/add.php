<?php 
    require_once('../database/connect.php');
?>
<?php
if(isset($_POST['btnadd'])){
    $cate_name = $_POST['cate_name'];
    $sql = "INSERT INTO cate_post (cate_name) VALUES ('$cate_name') ";
    $query = mysqli_query($connect,$sql);
    header("location:index.php?page_layout=cate-post");
}
?>

    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <div class="card" style="width: 80%;">
        <div class="card-body">
            <h5 class="card-title">Thêm chuyên mục</h5>
            <form action="#" method="post" role="form">
                <div class="form-group">
                    <label for=""> Tên chuyên mục </label>
                    <input type="text" class="form-control" name="cate_name" required>
                </div>
                <div class="form-group">
                    <button type="submit" value="Thêm" name="btnadd" class="btn btn-primary"> Thêm  </button>
                </div>
            </form>
        </div>
    </div>
</div>