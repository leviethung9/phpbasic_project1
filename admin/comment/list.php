<?php
    require_once('../database/connect.php');
?>
<?php 
$sql = "SELECT * FROM comment";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Quản trị bình luận </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Sản phẩm</th>
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
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['content'] ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td>
                        
                        <a href="index.php?page_layout=delete-category&id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return Delete('<?php echo $row['cate_name'] ?>')">Xóa</a>
                    </td>
                </tr>
            <?php        } ?>
        </tbody>
    </table>
</div>
<script>
    function Delete(cate_name){
        return confirm("Bạn có chắc chắn muốn xóa danh mục:" + cate_name + "?");
    }
</script>

