<?php 
    require_once('../database/connect.php');
?>
<?php
if(isset($_POST['btnadd'])){
    $cate_name = $_POST['txtcate_name'];
    $sql = "INSERT INTO category (cate_name) VALUES ('$cate_name') ";
    $query = mysqli_query($connect,$sql);
    header("location:index.php?page_layout=danh-muc");
}
?>

    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <div class="card" style="width: 80%;">
        <div class="card-body">
            <h5 class="card-title">Thêm danh mục</h5>
            <form action="#" method="post" role="form">
                <div class="form-group">
                    <label for=""> Tên danh mục </label>
                    <input type="text" class="form-control" name="txtcate_name" required>
                </div>
                <div class="form-group">
                    <button type="submit" value="Thêm" name="btnadd" class="btn btn-primary"> Thêm  </button>
                </div>
            </form>
        </div>
    </div>
</div>