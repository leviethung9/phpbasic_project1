<?php
    require_once('../database/connect.php');
?>
<?php 
$sql = "SELECT * FROM money";
$query = mysqli_query($connect, $sql);
?>
<br>
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <h3> Quản trị bài viết </h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tên đơn vị</th>
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
                    <td><?php echo $row['name_unit'] ?></td>
                    <td>
                        <a href="index.php?page_layout=edit_unit_money&id=<?php echo $row['id'] ?>" class="btn btn-warning">Sửa</a>
                    </td>
                </tr>
            <?php        } ?>
        </tbody>
    </table>
</div>

