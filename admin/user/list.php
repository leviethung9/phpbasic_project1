<?php
    require_once('../database/connect.php');
?>
<?php 
$sql = "SELECT * FROM user";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Danh sách user </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tài khoản</th>
                <th scope="col">Số điện thoại</th>
                
               
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    
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

