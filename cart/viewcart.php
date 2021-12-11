<?php
require_once('../database/connect.php');
session_start();
if(!isset($_SESSION['cart'])){
  header('location:history.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/favicon.png">
  <title>
    
  </title>
  <link href="../public/fashion/css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
  <link href="../public/fashion/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/fashion/css/flexslider.css" type="text/css" media="screen" />
  <link href="../public/fashion/css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="wrapper">
    
    
    <div class="container_fullwidth">
      <div class="container shopping-cart">
        <div class="row">
          <div class="col-md-12">
            <a href="../index.php" class="btn btn-primary"> Về trang chủ </a>
            <h3 class="title">
              Thông tin giỏ hàng
            </h3>
            <div class="clearfix">
            </div>
            <table class="table table-bordered ">
              <thead>
                <tr style="font-weight: 550;font-size:16px">
                  <th scope="col">STT</th>
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Thành tiền</th>
                  <th scope="col">Thao tác</th>
                </tr>
              </thead>
              <tbody style="font-size: 18px;">
                    <?php
                        $sql = "SELECT * FROM money";
                        $query = mysqli_query($connect, $sql);
                        $unit = mysqli_fetch_assoc($query);
                        $name_unit = $unit['name_unit'];

                      if(isset($_SESSION['cart'])){
                        $i = 0;
                        $total_bill = 0;
                      foreach($_SESSION['cart'] as $cart_item ){
                        $total_price = $cart_item['total']*$cart_item['price'];
                        $total_bill+=$total_price;
                        $i++;
                    ?>
                <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $cart_item['title'] ?></td>
                  <td>
                    <img src="../uploads/<?php echo $cart_item['thumbnail'] ?>" alt="" class="w-100 img-fluid img-thumbnail" style="height: 150px;">
                  </td>
                  <td><?php echo number_format($cart_item['price']) ?> <?php echo $name_unit ?></td>
                  <td>
                    
                    <?php echo  $cart_item['total'] ?>
                    
                    
                  </td>
                  <td><?php echo number_format($total_price)  ?> <?php echo $name_unit ?></td>
                  <td> <a href="cart.php?xoa=<?php echo $cart_item['id'] ?>">Xóa sản phẩm</a> </td>
                </tr>
                <?php
                      }
                ?>
               <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Tổng tiền: <?php echo number_format($total_bill)  ?> <span><?php echo $name_unit ?></span> </td>
                  <td>
                    <a href="cart.php?xoatatca=1"> Hủy đơn hàng</a>
                  </td>
                </tr>
                
              
              <?php
               }
               else{
              ?>
              <tr>
                  <td colspan="12"> Giỏ hàng trống</td>
                </tr>
                <?php
               }
                ?>
              </tbody>
            </table>
            <div class="row">
              <div class="col-6">
                <div class="border" style="padding: 15px;">
                <h3 class="title">Thông tin đặt hàng</h3>
               <form action="payment.php" method="post" role="form">
               <label for=""> Tổng hóa đơn: <?php echo number_format($total_bill) ?> <span><?php echo $name_unit ?></span> </label>
                 </div>
                 <div class="form-group">
                 
                 <input type="hidden" name="bill" value="<?php echo $total_bill ?>">
                <div class="form-group">
                    <label for=""> Địa chỉ </label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="form-group">
                    <label for=""> Số điện thoại </label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
                <div class="form-group">
                    <button type="submit" value="Đặt hàng" name="btncart" class="btn btn-primary"> Thêm  </button>
                </div>
            </form>
                </div>
               
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="clearfix">
    </div>
  
</body>

</html>