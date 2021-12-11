<?php
ob_start();
require_once('../database/connect.php');
$id = $_GET["id"];
$sql = "SELECT * FROM money WHERE id='$id'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
$err;
if (isset($_POST['btnsave'])) {
    $name_unit = $_POST['name_unit'];
    if ($name_unit == "") {
        // Check xem có ký tự hay không, nếu không thì báo lỗi
        $err = "<span style='color:red;'>Bắt buộc phải nhập tên danh mục</span>";
    } else {
        $name_unit = $_POST["name_unit"];
        $countt = mb_strlen($name_unit); // Đếm số lượng ký tự của tên danh mục
        if (preg_match("/^[a-zA-Z ]*$/", $name_unit) == false && $countt < 3) {
            // Kiểm tra nếu không thỏa mãn thì báo lỗi
            $err = "<span style='color:red;'>Tên đơn vị tiền ít nhất 3 ký tự</span>";
        } else {
            $sql = "SELECT * FROM unit_money WHERE name_unit='$name_unit'";
            $query = mysqli_query($connect, $sql);
            $row = mysqli_fetch_array($query);
            if ($row["name_unit"] == "" || $row['id'] == $id) {
                // Em cho truy xuất từ cơ sở dữ liệu, nếu có dữ liệu thì báo đã tồn tại, không có thì sẽ thêm dữ liệu bình  thường, và sửa cũng không được trùng dl với tên các khóa học khác
                $cate_name = $_POST['name_unit'];
                if (isset($name_unit)) {
                    $sql = "UPDATE unit_money SET name_unit='$name_unit' WHERE id=$id";
                    $query = mysqli_query($connect, $sql);
                    header("location:index.php?page_layout=unit_money");
                }
            } else {
                $err = "<span style='color:red;'>Đơn vị tiền đã tồn tại</span>";
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
                <input type="text" class="form-control" name="name_unit" value="<?php echo $row['name_unit'] ?>" >
            </div>
            <div class="form-group">
                <button type="submit" value="" name="btnsave" class="btn btn-primary"> Cập nhật </button>
            </div>
        </form>
    </div>
</div>
</div>