<?php
    require_once('../database/connect.php');
?>
<?php 
$sql = "SELECT * FROM cate_post";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Quản trị chuyên mục </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tên chuyên mục</th>
                <th scope="col">
                    <a href="index.php?page_layout=add-cate-post" class="btn btn-primary"> Thêm  </a>
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
                        <a href="index.php?page_layout=edit-cate-post&id=<?php echo $row['id'] ?>" class="btn btn-warning">Sửa</a>
                        <a href="index.php?page_layout=delete-cate-post&id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return Delete('<?php echo $row['cate_name'] ?>')">Xóa</a>
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

