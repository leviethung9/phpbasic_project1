<?php require_once('database/connect.php') ?>
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
                           while ($row = mysqli_fetch_array($query)) {
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
                           while ($row = mysqli_fetch_array($query)) {
                           ?>
                  <li>
                    <a href="index.php?pages=blog-filter&id=<?php echo $row['id']; ?>">
                      <?php echo $row['name'] ?>
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
              <div class="col-12">
                     <h3 style="margin-top: 15px;"> Giới thiệu </h3>
                     <p style="padding: 15px 5px;font-size:15px;line-height:20px">
                     Hãy xem hậu trường chụp ảnh bìa của Mario Maurer và Jingjing Warisara Yu trên bìa tạp chí ELLE Vietnam số tháng 10. Mario và JingJing cùng xuất hiện ấn tượng trong BST Thu Đông 2021 của Onitsuka Tiger. BST là sự hoà trộn điêu luyện của những khái niệm tương phản: Kinh điển - đổi mới; di sản - công nghệ; xu hướng - ứng dụng. Tất cả đều hướng đến những trải nghiệm thời trang đầy hứa hẹn và bùng nổ.
                     </p>
                     <p style="padding: 15px 5px;font-size:15px;line-height:20px">
                     với các thiết kế thiên về sự tối giản kết hợp những chi tiết tinh tế như thắt nơ, khăn quàng cổ nhẹ nhàng ... là biểu tượng cho nét đẹp nữ tính, dịu dàng mà đầy cuốn hút của phái đẹp.
                     </p>
                 </div>
                <div class="clearfix">
                </div>
                <div class="row">
                <div class="clearfix">
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