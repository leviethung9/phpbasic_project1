<?php
require_once('../database/connect.php');
require_once('header.php');
?>
<?php
// lay danh muc san pham
$sql_category = "SELECT * FROM category";
$query_category = mysqli_query($connect, $sql_category);

if (isset($_POST['btnadd'])) {
    $name = $_POST['txtname'];
    $cate_name = $_POST['txtcate_name'];

    $img = $_FILES['txtimg']['name'];
    $img_tmp = $_FILES['txtimg']['tmp_name'];

    $price = $_POST['txtprice'];
    $short_des = $_POST['txtshort_des'];
    $des = $_POST['txtdes'];

    $sql = "INSERT INTO product (title, cate_name, thumbnail, price, short_description, description) 
    
           VALUES ('$name', '$cate_name', '$img', '$price', '$short_des', '$des')";
    $query = mysqli_query($connect, $sql);

    move_uploaded_file($img_tmp, '../uploads/'.$img);

    header('location: index.php?page_layout=san-pham');
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <div class="card" style="width: 80%;">
        <div class="card-body">
            <h5 class="card-title">Thêm sản phẩm</h5>
            <form action="" method="post" enctype="multipart/form-data" tocomplete="off">
                <div class="form-group">
                    <label for=""> Tiêu đề sản phẩm </label>
                    <input type="text" class="form-control" name="txtname" required>
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
                    <input type="file" class="form-control" name="txtimg" required>
                </div>
                <div class="form-group">
                    <label for=""> Giá </label>
                    <input type="number" class="form-control" name="txtprice" required>
                </div>
                <div class="form-group">
                    <label for=""> Mô tả ngắn </label>
                    <input type="text" class="form-control" name="txtshort_des" required>
                </div>
                <div class="form-group">
                    <label for=""> Thông tin chi tiết </label>
                    <input type="text" class="form-control" name="txtdes" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="btnadd" class="btn btn-primary"> Thêm </button>
                   
                </div>
            </form>
        </div>
    </div>

</main>
</div>



</body>

</html>