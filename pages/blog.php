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
                <h3 class="title">
                  Chuyên mục bài viết
                </h3>
                <ul>
                  <!-- lay ra ten chuyen muc -->
                  <?php 
                    $sql = "SELECT * FROM cate_post";
                    $query = mysqli_query($connect,$sql);
                  ?>
                   <?php
                           while ($row = mysqli_fetch_assoc($query)) {
                           ?>
                  <li>
                    <a href="index.php?pages=blog-filter&id=<?php echo $row['id']; ?>">
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
             
              <div class="clearfix">
              </div>
              <div class="products-grid">
               <div class="row">
               <?php
                          $sql = "SELECT * FROM post";
                          $query = mysqli_query($connect,$sql);
                           while ($row = mysqli_fetch_assoc($query)) {
                           ?>
                    <div class="col-md-4 col-sm-6">
                              <div class="products">
                                
                                 <div class="thumbnail">
                                    <a href="index.php?pages=blog-detail&id=<?php echo $row['id']; ?>">
                                       <img src="uploads2/<?php echo $row['avatar']?>" alt="ảnh tin tức" style="height: 95%;">
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