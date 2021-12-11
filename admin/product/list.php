<?php
    require_once('../database/connect.php');
?>
<?php 
$sql = "SELECT * FROM product";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Quản trị sản phẩm </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th >Thuộc danh mục</th>
                <th>Tiêu đề</th>
                <th >ảnh</th>
                <th >Giá</th>
                <th >Mô tả ngắn</th>
                <th >Chi tiết</th>
                <th scope="col">
                    <a href="index.php?page_layout=add-product" class="btn btn-primary"> Thêm  </a>
                </th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <th ><?php echo $row['cate_name'] ?></th>
                    <th ><?php echo $row['title'] ?></th>
                    <th >
                        <img src="../uploads/<?php echo $row['thumbnail'] ?>" alt="" class="img-fluid w-100 img-thumbnail">
                    </th>
                    <th ><?php echo $row['price'] ?></th>
                    <th ><?php echo $row['short_description'] ?></th>
                    <th ><?php echo $row['description'] ?></th>
                    <td>
                        <a href="index.php?page_layout=edit-product&id=<?php echo $row['id'] ?>" class="btn btn-warning">Sửa</a>
                        <a href="index.php?page_layout=delete-product&id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return Delete('<?php echo $row['title'] ?>')">Xóa</a>
                    </td>
                </tr>
            <?php        } ?>
        </tbody>
    </table>
</div>
<script>
    function Delete(title){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm:" + title + "?");
    }
</script>

