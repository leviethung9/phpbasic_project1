<?php
    require_once('../database/connect.php');
?>
<?php 
$sql = "SELECT * FROM post";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Quản trị bài viết </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Thuộc chuyên mục</th>
                <th scope="col">Hình ảnh đại diện</th>
                <th scope="col">Nội dung</th>
                <th scope="col">
                    <a href="index.php?page_layout=add-post" class="btn btn-primary"> Thêm  </a>
                </th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['id_cate_post'] ?></td>
                    <td>
                        <img src="../uploads2/<?php echo $row['avatar'] ?>" class="img-fluid w-100 img-thumbnail" alt="">
                        
                    </td>
                    <td><?php echo $row['content'] ?></td>
                    <td>
                        <a href="index.php?page_layout=edit-post&id=<?php echo $row['id'] ?>" class="btn btn-warning">Sửa</a>
                        <a href="index.php?page_layout=delete-post&id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return Delete('<?php echo $row['title'] ?>')">Xóa</a>
                    </td>
                </tr>
            <?php        } ?>
        </tbody>
    </table>
</div>
<script>
    function Delete(title){
        return confirm("Bạn có chắc chắn muốn xóa bài viết:" + title + "?");
    }
</script>

