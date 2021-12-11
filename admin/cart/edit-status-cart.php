<?php
ob_start();
include_once('../database/connect.php');

 $id = $_GET['id'];
 $sql = "SELECT * FROM cart WHERE id = $id ";
 $query = mysqli_query($connect,$sql);
 $rowstt= mysqli_fetch_assoc($query);
 var_dump($rowstt);
 die();

 $sql = "SELECT * FROM status";
 $query = mysqli_query($connect,$sql);

 if(isset($_POST['btnsave'])){
    $status = $_POST['status'];
    $sql = "UPDATE cart SET status = '$status' id = '$id'";

    $query = mysqli_query($connect,$sql);
    header("location:index.php?page_layout=cart");
}

 
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <!-- hien thi tung chuc nang cua trang quan tri START-->
    <div class="card" style="width: 80%;">
        <div class="card-body">
            <h5 class="card-title">Cập nhật trạng thái đơn hàng</h5>
            <form action="" method="post" enctype="">
            <p class="text-danger"> 1. Đang giao </p>
            <p class="text-success"> 2. Đã giao thành công </p>
            <p class="text-primary"> 3. Giao không thành công </p>
                <div class="form-group">
                    <label for=""> Trạng thái </label>
                    <select name="status" id="" class="form-control">
                        <?php while ($rowstt= mysqli_fetch_assoc($query)) { ?>
                            <option value="<?= $rowstt['number'] ?>"><?= $rowstt['number'] ?> </option>
                        <?php   } ?>
                    </select>
                </div>
               
                <div class="form-group">
                    <input type="submit" value="Cập nhật" name="btnsave" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

</main>
</div>



</body>

</html>