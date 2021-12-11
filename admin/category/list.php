<?php
    require_once('../database/connect.php');
?>
<?php 
$sql = "SELECT * FROM category";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Quản trị danh mục </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">
                    <a href="index.php?page_layout=add-category" class="btn btn-primary"> Thêm  </a>
                </th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['cate_name'] ?></td>
                
                    <td>
                        <a href="index.php?page_layout=edit-category&id=<?php echo $row['id'] ?>" class="btn btn-warning">Sửa</a>
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

