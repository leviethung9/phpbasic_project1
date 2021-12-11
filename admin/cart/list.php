<?php
    require_once('../database/connect.php');
?>
<?php 
$sql = "SELECT * FROM cart";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Quản trị đơn hàng </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Mã sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng hóa đơn</th>
                <th scope="col">Số điện thoại người nhận</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">
                    Thao tác
                </th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id_cart'] ?></th>
                    <td><?php echo $row['code_cart'] ?></td>
                    <td><?php echo $row['user_name'] ?></td>
                    <td><?php echo $row['id_product'] ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['total'] ?></td>
                    <td><?php echo number_format($row['bill']) ?> <span>VNĐ</span></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td>
                        <?php
                        if($row['status'] == 1){
                            echo 'Đang giao';
                        }
                        elseif($row['status'] == 2){
                            echo 'Đã giao thành công';
                        }
                        else{
                            echo 'Giao không thành công';
                        }
                        ?>
                        
                        
                    </td>
                    <td>
                        <a href="index.php?page_layout=detail-product-cart&id=<?php echo $row['id_product'] ?>" class="btn btn-warning">Xem chi tiết sản phẩm</a>
                       <br>
                        <a href="index.php?page_layout=edit-status-cart&id=<?php echo $row['id_cart'] ?>" class="btn btn-danger" onclick="return Delete('<?php echo $row['cate_name'] ?>')">Cập nhật trạng thái</a>
                    </td>
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

