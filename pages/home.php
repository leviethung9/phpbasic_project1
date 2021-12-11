<?php
require_once('database/connect.php');
?>
<div class="clearfix"></div>
<div class="hom-slider">
   <div class="container">
      <div id="sequence">
         <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
         <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
         <ul class="sequence-canvas">
            <li class="animate-in">
               <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Sản phẩm mùa đông 2021</span></div>
               <div class="flat-caption caption2 formLeft delay400 text-center">
                  <h2>Bộ sưu tập </h2>
               </div>
               <div class="flat-caption caption3 formLeft delay500 text-center">
                  <p>Sản phẩm đẹp<br>Chất lượng cao giá rẻ</p>
               </div>
               <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Xem thêm</a></div>
               <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="public/fashion/images/slider-image-01.png" alt=""></div>
            </li>
            <li>
               <div class="flat-caption caption2 formLeft delay400 text-center">
                  <h2>Bộ sưu tập</h2>
               </div>
               <div class="flat-caption caption3 formLeft delay500 text-center">
                  <p>Sản phẩm đẹp<br>Chất lượng cao giá rẻ</p>
               </div>
               <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">Xem thêm</a></div>
               <div class="flat-image formBottom delay200" data-bottom="true"><img src="public/fashion/images/slider-image-02.png" alt=""></div>
            </li>
            <li>
               <div class="flat-caption caption2 formLeft delay400 text-center">
                  <h2>Bộ sưu tập </h2>
               </div>
               <div class="flat-caption caption3 formLeft delay500 text-center">
                  <p>Sản phẩm đẹp<br>Chất lượng cao giá rẻ</p>
               </div>
               <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Xem thêm</a></div>
               <div class="flat-image formBottom delay200" data-bottom="true"><img src="public/fashion/images/slider-image-03.png" alt=""></div>
            </li>
         </ul>
      </div>
   </div>
   <div class="promotion-banner">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
               <div class="promo-box"><img src="public/fashion/images/promotion-01.png" alt=""></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
               <div class="promo-box"><img src="public/fashion/images/promotion-02.png" alt=""></div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
               <div class="promo-box"><img src="public/fashion/images/promotion-03.png" alt=""></div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
<div class="container_fullwidth">
   <div class="container">
      <!-- xu ly lay don vi tien -->
      <?php
      $sql = "SELECT * FROM money";
      $query = mysqli_query($connect, $sql);
      $unit = mysqli_fetch_assoc($query);
      $name_unit = $unit['name_unit'];
      ?>
      <div class="hot-products">
         <h3 class="title"><strong>Sản phẩm</strong> mới</h3>
         <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
         <ul id="hot">
            <li>
               <div class="row">
                  <!-- xu ly lay san pham -->
                  <?php
                  $sql = "SELECT * FROM product WHERE id LIMIT 8 ";
                  $query = mysqli_query($connect, $sql);
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($query)) {
                  ?>
                        <div class="col-md-3 col-sm-6">
                        <form action="cart/cart.php?id=<?php echo $row['id'] ?>" method="post">
                           <div class="products">
                              <div class="thumbnail">
                                 <a href="index.php?pages=product-detail&id=<?php echo $row['id']; ?>">
                                    <img src="uploads/<?php echo $row['thumbnail'] ?>" alt="ảnh sản phẩm" style="height: 95%;">
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
            </li>

         </ul>
      </div>

      <div class="clearfix"></div>
      <div class="featured-products">
         <h3 class="title"><strong> Tin tức </strong> nổi bật</h3>

         <ul id="featured">
            <li>
               <div class="row">
                  <!-- xu ly lay tin tuc -->
                  <?php
                  $sql = "SELECT * FROM post WHERE id LIMIT 4 ";
                  $query = mysqli_query($connect, $sql);
                  ?>
                  <?php
                  while ($row = mysqli_fetch_assoc($query)) {
                  ?>
                     <div class="col-md-3 col-sm-6">
                        <div class="products">

                           <div class="thumbnail">
                              <a href="index.php?pages=blog-detail&id=<?php echo $row['id']; ?>">
                                 <img src="uploads2/<?php echo $row['avatar'] ?>" alt="ảnh tin tức" style="height: 95%;">
                              </a>
                           </div>
                           <div class="productname"><?php echo $row['title'] ?></div>
                           </br>
                           <div class="button_group" style="padding-top:25px;">
                              <a href="index.php?pages=blog-detail&id=<?php echo $row['id']; ?>" class="button add-cart" type="button">Xem thêm</a>
                           </div>
                        </div>

                     </div>
                  <?php        } ?>

               </div>
            </li>
         </ul>
      </div>
      <div class="clearfix"></div>
      <div class="our-brand">
         <h3 class="title"><strong>Thương </strong> hiệu</h3>
         <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
         <ul id="braldLogo">
            <li>
               <ul class="brand_item">
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/envato.png" alt=""></div>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/themeforest.png" alt=""></div>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/photodune.png" alt=""></div>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/activeden.png" alt=""></div>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/envato.png" alt=""></div>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <ul class="brand_item">
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/envato.png" alt=""></div>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/themeforest.png" alt=""></div>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/photodune.png" alt=""></div>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/activeden.png" alt=""></div>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <div class="brand-logo"><img src="public/fashion/images/envato.png" alt=""></div>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
</div>