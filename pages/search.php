<?php
ob_start();
  require_once('database/connect.php');
  if(isset($_POST['search'])){
      $keyword = $_POST['keyword'];
  }
  else{
      $keyword = '';
  }
  $sql = "SELECT * FROM product WHERE title LIKE '%$keyword%' ";
  $query = mysqli_query($connect,$sql);
  $item = mysqli_fetch_array($query);
 

?>
<div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
          <div class="col-md-3">
              <div class="category leftbar">
                <h3 class="title">
                  Danh mục sản phẩm
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
              <div class="clearfix">
              </div>
              <div class="category leftbar">
                <h3 class="title">
                  Chuyên mục bài viết
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
                    <a href="">
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
                  <p class="title"> Sản phẩm chứa từ khóa: '<?php echo $keyword ?>' </p>
                  <!-- xu ly lay don vi tien -->
                <?php

                     $sql = "SELECT * FROM unit_money";
                     $query = mysqli_query($connect, $sql);
                     $unit = mysqli_fetch_array($query);
                     $name_unit = $unit['name_unit']; 
               ?>
                  <div class="col-md-4 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail">
                                    <a href="index.php?pages=product-detail&id=<?php echo $item['id']; ?>">
                                       <img src="uploads/<?php echo $item['thumbnail']?>" alt="ảnh sản phẩm" style="height: 95%;">
                                    </a>
                                 </div>
                                 <div class="productname"><?php echo $item['title'] ?></div>
                                 <h4 class="price"><?php echo number_format($item['price'])  ?> <span> <?php echo $name_unit ?> </span> </h4>
                                 <div class="button_group">
                                </div>
                              </div>
                           </div>
                  
              
                <div class="clearfix">
                </div>
                <div class="toolbar">
                  
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