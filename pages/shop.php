<?php 
  require_once('database/connect.php');
  
?>
<div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
          <div class="col-md-3">
              <div class="category leftbar">
                
                <a href="index.php?pages=shop" class="title">
                Danh mục sản phẩm
                </a>
                <h3 >
                  
                </h3>
                <ul>
                  <!-- lay ra ten danh muc -->
                  <?php 
                    $sql = "SELECT * FROM category";
                    $query = mysqli_query($connect,$sql);
                  ?>
                   <?php
                           while ($row = mysqli_fetch_assoc($query)) {
                           ?>
                  <li>
                    <a href="index.php?pages=category-fitler&id=<?php echo $row['id']; ?>">
                      <?php echo $row['cate_name'] ?>
                    </a>
                  </li>
                  <?php        } ?>
                </ul>
              </div>
              <div class="category leftbar">
                <h3 class="title">
                  Chuyên mục
                </h3>
                <ul>
                  <!-- lay ra ten danh muc -->
                  <?php 
                    $sql = "SELECT * FROM cate_post";
                    $query = mysqli_query($connect,$sql);
                  ?>
                   <?php
                           while ($row = mysqli_fetch_assoc($query)) {
                           ?>
                  <li>
                    <a href="index.php?pages=category-fitler&id=<?php echo $row['id']; ?>">
                      <?php echo $row['cate_name'] ?>
                    </a>
                  </li>
                  <?php        } ?>
                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="leftbanner">
                <img src="public/fashion/images/banner-small-01.png" alt="">
              </div>
          </div>
                          
            <div class="col-md-9">
              <div class="banner">
                <div class="bannerslide" id="bannerslide">
                  <ul class="slides">
                    <li>
                      <a href="#">
                        <img src="public/fashion/images/bn1.png" alt="" />
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="public/fashion/images/bn2.jpg" alt="" />
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="products-grid">
               
                <div class="row">
                  <!-- xu ly lay don vi tien -->
                <?php
                    $sql = "SELECT * FROM money";
                    $query = mysqli_query($connect, $sql);
                    $unit = mysqli_fetch_assoc($query);
                    $name_unit = $unit['name_unit'];         
                ?>
                <?php 
                if(isset($_GET['trang'])){
                  $trang = $_GET['trang'];
              
                }
                else{
                  $trang = '';
                }
                if($trang == '' || $trang == 1){
                  $begin = 0;
                }
                else{
                  $begin = ($trang*9)-9;
                }
                    $sql = "SELECT * FROM product WHERE id LIMIT $begin,9 ";
                    $query = mysqli_query($connect, $sql);

                    
                ?>
                <?php
                    while ($row = mysqli_fetch_assoc($query)) {
                ?>
                  <div class="col-md-4 col-sm-6">
                  <form action="cart/cart.php?id=<?php echo $row['id'] ?>" method="post">
                              <div class="products">
                                 <div class="thumbnail">
                                    <a href="index.php?pages=product-detail&id=<?php echo $row['id']; ?>">
                                       <img src="uploads/<?php echo $row['thumbnail']?>" alt="ảnh sản phẩm" style="height: 95%;">
                                    </a>
                                 </div>
                                 <div class="productname"><?php echo $row['title'] ?></div>
                                 <h4 class="price"><?php echo number_format($row['price'])  ?> <span> <?php echo $name_unit ?> </span> </h4>
                                 <div class="button_group">
                                 <?php
                                 $id = $row['id'];

                                 if (isset($_SESSION['login_user'])) {

                                    echo '<input type="submit" value="Thêm giỏ hàng" class="btn" name="addcart">';
                                 } else {
                                    echo '<p >Đăng nhập để mua hàng</p>';
                                 }
                                 ?>
                                    
                                    
                                    </div>
                              </div>
                  </form>
                           </div>
                  <?php        } ?>
                  
                </div>
                <div class="clearfix">
                </div>
                <div class="toolbar">
                  <!-- code xu ly phan trang -->
                  <?php
                    $sql_pages = "SELECT * FROM product";
                    $query = mysqli_query($connect,$sql_pages);
                    $row_count = mysqli_num_rows($query);
                    
                    $pagination = ceil($row_count / 9) ;
                    
                  ?>
                  <div class="pager" style="font-size: 18px;">
                  <a href="#" class="prev-page">
                        <i class="fa fa-angle-left">
                        </i>
                    </a>
                    <?php
                    for($i = 1; $i<=$pagination; $i++){
                    
                      ?>
                    <a <?php if($i==$trang){echo 'style="background:red"';}else{ echo '';} ?> href="index.php?pages=shop&trang=<?php echo $i ?>" class="" style="font-size: 20px;">
                      <?php echo $i ?>
                    </a>
                    <?php
                     }
                     ?>
                   <a href="#" class="next-page">
                        <i class="fa fa-angle-right">
                        </i>
                    </a>
                  </div>
                </div>
                <div class="clearfix">
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
            <strong>
                Thương 
              </strong>
              hiệu
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="public/fashion/images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>