<?php 
  require_once('database/connect.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM post WHERE id = $id";
  $query = mysqli_query($connect,$sql);
  $content = mysqli_fetch_array($query);
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
                    <a href="">
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
             
              <div class="clearfix">
              </div>
              <div class="products-grid">
               <div class="row">
                <div class="col-12">
                  <!-- tieu de bai viet -->
                  <h3 style="color: red;"> <?php echo $content['title'] ?> </h3>
                  <br>
                  <div>
                  <?php echo $content['content'] ?>
                  </div>
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