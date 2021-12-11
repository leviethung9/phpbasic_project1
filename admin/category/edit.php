<?php
ob_start();
require_once('../database/connect.php');
$id = $_GET["id"];
$sql = "SELECT * FROM category WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
$err;
if (isset($_POST['btnsave'])) {
    $cate_name = $_POST['cate_name'];
    if ($cate_name == "") {
        // Check xem có ký tự hay không, nếu không thì báo lỗi
        $err = "<span style='color:red;'>Bắt buộc phải nhập tên danh mục</span>";
    } else {
        $cate_name = $_POST["cate_name"];
        $countt = mb_strlen($cate_name); // Đếm số lượng ký tự của tên danh mục
        if (preg_match("/^[a-zA-Z ]*$/", $cate_name) == false && $countt < 3) {
            // Kiểm tra nếu không thỏa mãn thì báo lỗi
            $err = "<span style='color:red;'>Tên danh mục ít nhất 3 ký tự</span>";
        } else {
            $sql = "SELECT * FROM category WHERE cate_name='$cate_name'";
            $query = mysqli_query($connect, $sql);
            $row = mysqli_fetch_array($query);
            if ($row["cate_name"] == "" || $row['id'] == $id) {
                // Em cho truy xuất từ cơ sở dữ liệu, nếu có dữ liệu thì báo đã tồn tại, không có thì sẽ thêm dữ liệu bình  thường, và sửa cũng không được trùng dl với tên các khóa học khác
                $cate_name = $_POST['cate_name'];
                if (isset($cate_name)) {
                    $sql = "UPDATE category SET cate_name='$cate_name' WHERE id=$id";
                    $query = mysqli_query($connect, $sql);
                    header("location:index.php?page_layout=danh-muc");
                }
            } else {
                $err = "<span style='color:red;'>Tên danh mục đã tồn tại</span>";
            }
        }
    }
}
?>
<div class="card" style="width: 80%;">
    <div class="card-body">
        <h5 class="card-title">Sửa danh mục</h5>
        <div class="err">
            <?php
            if (isset($err)) {
                echo $err;
            }
            ?>
        </div>
        <form action="#" method="post" role="form">
            <div class="form-group">
                <label for=""> Tên danh mục </label>
                <input type="text" class="form-control" name="cate_name" value="<?php echo $row['cate_name'] ?>" >
            </div>
            <div class="form-group">
                <button type="submit" value="Thêm" name="btnsave" class="btn btn-primary"> Cập nhật </button>
            </div>
        </form>
    </div>
</div>
</div>