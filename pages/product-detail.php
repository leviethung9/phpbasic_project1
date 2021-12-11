<?php 

  require_once('database/connect.php');
  ob_start();
?>

<div class="container_fullwidth">
        <div class="container">
          <div class="row">

            <div class="col-md-9">
                 <!-- xu ly lay don vi tien -->
                 <?php
                              $sql = "SELECT * FROM money";
                              $query = mysqli_query($connect, $sql);
                              $unit = mysqli_fetch_assoc($query);
                              $name_unit = $unit['name_unit'];
                             
                           ?>
              <!-- xu ly lay chi tiet san pham -->
              <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM product WHERE id = $id";
                $query = mysqli_query($connect,$sql);
                $row = mysqli_fetch_array($query);

              ?>
              <form action="cart/cart.php?id=<?php echo $row['id'] ?>" method="post">
              <div class="products-details">
                <div class="preview_image">
                  <!-- anh san pham -->
                  <div class="preview-small">
                    <img id="zoom_03" name="image" src="uploads/<?php echo $row['thumbnail'] ?>" data-zoom-image="uploads/<?php echo $row['thumbnail'] ?>" alt="Ảnh sản phẩm">
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                      <li>
                        <a href="#" data-image="uploads/<?php echo $row['thumbnail'] ?>" data-zoom-image="uploads/<?php echo $row['thumbnail'] ?>">
                          <img src="uploads/<?php echo $row['thumbnail'] ?>" alt="">
                        </a>
                      </li>
                      
                    </ul>
                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                      <i class="fa fa-chevron-left">
                      </i>
                    </a>
                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                      <i class="fa fa-chevron-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="products-description">
                  <h5 class="name" name="name">
                  <?php echo $row['title'] ?>
                  </h5>
                  <p>
                    <img alt="" src="public/fashion/images/star.png">
                    <a class="review_num" href="#">
                      02 Review(s)
                    </a>
                  </p>
                  <p>
                    Thuộc danh mục: 
                    <span class=" light-red">
                    <?php echo $row['cate_name'] ?>
                    </span>
                  </p>

                  <p>
                  <?php echo $row['short_description'] ?>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Giá : 
                    <span class="new_price" name="price">
                    <?php echo number_format($row['price'])  ?> <span> <?php echo $name_unit ?> </span>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                  <div class="button_group">
                    <form action="cart/cart.php?id=<?php echo $row['id'] ?>" method="post">

                   
                  <?php
                                 $id = $row['id'];

                                 if (isset($_SESSION['login_user'])) {

                                    echo '<input type="submit" value="Thêm giỏ hàng" class="btn" name="addcart">';
                                 } else {
                                    echo '<p >Đăng nhập để mua hàng</p>';
                                 }
                                 ?>
                    </div>
                    </form>
                    
                  </div>
                 
                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="images/share.png" alt="" class="pull-right">
                </div>
                </form>
              </div>
                                
              <div class="clearfix">
              </div>
              <div class="tab-box">
              <div id="tabnav">
                  <ul>
                    <li>
                      <a href="">
                        Mô tả chi tiết
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p style="font-size: 16px;line-height:25px">
                    <?php echo $row['description'] ?>
                    </p>
                  
                  </div>
                  
                </div>
                
              </div>
            <div class="clearfix">

            </div>

            <div style="padding: 15px;border: 1px solid #333;">
            <?php
              $product_name = $row['title'];
              
              $sql = "SELECT * FROM comment LIMIT 5 ";

              $query = mysqli_query($connect,$sql);
            ?>
              <?php
               while ($rowcmt = mysqli_fetch_assoc($query)) {
              ?>
              <div style="border-bottom: 1px solid #111; padding:5px 0px">
            <h5> Khách hàng: <?php echo $rowcmt['name'] ?> </h5>
            <br>
              <p style="color:#111;font-size:15px">Nội dung: <?php echo  $rowcmt['content'] ?></p>
            </div>
              <?php
               }
              ?>
        </div> 
<div class="clearfix"></div>
<br>
<?php
  if(isset($_POST['btnadd'])){
    $name = $_POST['name'];
    $content = $_POST['content'];
    $product_name = $_POST['product_name'];

    $sql = "INSERT INTO comment (name, content, product_name) VALUES ('$name','$content','$product_name') ";
    $query = mysqli_query($connect,$sql);
 
}
?>
            <form action="" method="post" role="form">
              <input type="hidden" name="product_name" value=" <?php echo $row['title'] ?>">
                <div class="form-group">
                    <label for="" style="font-size: 16px;padding: 10px 0px;" > Họ và tên </label>
                    <br>
                    <input type="text" class="form-control" name="name" required >
                </div>
                <div class="form-group">
                    <label for="" style="font-size: 16px;padding: 10px 0px;"> Nội dung: </label>
                    <br>
                    <textarea id="" cols="30" rows="10" name="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" value="Thêm" name="btnadd" class="btn btn-primary"> Bình luận  </button>
                </div>
            </form>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
                  <strong>
                    Sản phẩm liên quan
                  </strong>
                </h3>
               
                <ul id="hot">
                  <li>
                    <div class="row">
                      <!-- xu ly lay san pham lien quan -->
                      <?php
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM product WHERE id = $id";
                        $query = mysqli_query($connect,$sql);
                        $row_cate = mysqli_fetch_assoc($query);
                        $cate_name = $row_cate['cate_name'];
                       

                        $sql = "SELECT * FROM product WHERE cate_name LIKE '$cate_name' ";
                        $query = mysqli_query($connect,$sql);
                      ?>

                          <?php
                           while ($product_like = mysqli_fetch_assoc($query)) {
                           ?>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="thumbnail">
                        <a href="index.php?pages=product-detail&id=<?php echo $row['id']; ?>">
                          <img src="uploads/<?php echo $product_like['thumbnail'] ?>" alt="ảnh sản phẩm" style="height: 90%;">
                        </a>
                      </div>
                      <div class="productname">
                      <?php echo $product_like['title'] ?>
                      </div>
                      <h4 class="price">
                      <?php echo $product_like['price'] ?>
                      </h4>
                      <div class="button_group">
                        
                      </div>
                    </div>
                  </div>
                  <?php }; ?>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>
            </div>
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
         <div class="clearfix"></div>
  
