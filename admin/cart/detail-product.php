<?php
    require_once('../database/connect.php');
?>
<?php 
$id = $_GET['id'];
$sql = "SELECT * FROM product WHERE id = $id";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Quản trị đơn hàng </h3>
    <br>
    <a href="index.php?page_layout=cart" class="btn btn-primary"> Trở về </a>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Thuộc danh mục</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Mô tả ngắn</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['cate_name'] ?></td>
                    <td>
                        <img src="../uploads/<?php echo $row['thumbnail'] ?>"  class="img-fluid w-100 img-thumbnail" alt="">      
                    </td>
                    <td><?php echo number_format($row['price'])  ?> <span>VNĐ</span></td>
                    <td><?php echo $row['short_description'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                   
                   
                </tr>
            <?php        } ?>
        </tbody>
    </table>
</div>
<script>
    function Delete(cate_name){
        return confirm("Bạn có chắc chắn muốn xóa chuyên mục:" + cate_name + "?");
    }
</script>

