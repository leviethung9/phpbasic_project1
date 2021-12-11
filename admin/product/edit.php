<?php
require_once('../database/connect.php');
require_once('header.php');
?>
<?php
$err = "";
    // lay danh muc san pham
    $sql_category = "SELECT * FROM category";
    $query_category = mysqli_query($connect, $sql_category);

    // lay thong tin san pham theo id
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM product WHERE id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    // xu ly cap nhat san pham
    if(isset($_POST['btnsave']) )
    {
        $name = $_POST['txtname'];
        $cate_name = $_POST['txtcate_name'];

        $img = $_FILES['txtimg']['name'];
        $img_tmp = $_FILES['txtimg']['tmp_name'];

        $price = $_POST['txtprice'];
        $short_des = $_POST['txtshort_des'];
        $des = $_POST['txtdes'];

        $sql = "UPDATE product SET title='$name', cate_name='$cate_name', thumbnail='$img', price='$price', short_description='$short_des', description='$des' WHERE id = '$id' ";
        $query = mysqli_query($connect,$sql);
        move_uploaded_file($img_tmp, '../uploads/'.$img);
        header('location:index.php?page_layout=san-pham');
    }


?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <div class="card" style="width: 80%;">
        <div class="card-body">
            <h5 class="card-title">Sửa sản phẩm</h5>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for=""> Tên sản phẩm </label>
                    <input type="text" class="form-control" name="txtname" required value="<?php echo $row_up['title'] ?>">
                </div>
                <div class="form-group">
                    <label for=""> Thuộc danh mục </label>
                    <select name="txtcate_name" id="">
                        <?php while ($row_category = mysqli_fetch_assoc($query_category)) { ?>
                            <option value="<?= $row_category['cate_name'] ?>"><?= $row_category['cate_name'] ?> </option>
                        <?php   } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for=""> Hình ảnh </label>
                    <input type="file" class="form-control" name="txtimg" required value="<?php echo $row_up['thumbnail'] ?>">
                </div>
                <div class="form-group">
                    <label for=""> Giá </label>
                    <input type="number" class="form-control" name="txtprice" required value="<?php echo $row_up['price'] ?>">
                </div>
                <div class="form-group">
                    <label for=""> Mô tả ngắn</label>
                    <input type="text" class="form-control" name="txtshort_des" required value="<?php echo $row_up['short_description'] ?>">
                </div>
                <div class="form-group">
                    <label for=""> Thông tin chi tiết </label>
                    <input type="text" class="form-control" name="txtdes" required value="<?php echo $row_up['description'] ?>">
                </div>
                <div class="form-group">
                    <input type="submit" value="Cập nhật" name="btnsave" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

</main>
</div>



</body>

</html>