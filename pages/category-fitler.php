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
                    <ul>
                        <!-- lay ra ten danh muc -->
                        <?php
                        $sql = "SELECT * FROM category";
                        $query = mysqli_query($connect, $sql);
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

                        $id = $_GET['id'];
                        $sql = "SELECT * FROM category WHERE id = $id";
                        $query = mysqli_query($connect, $sql);
                        $row_cate = mysqli_fetch_array($query);
                        $cate_name = $row_cate['cate_name'];
                        

                        $sql = "SELECT * FROM product WHERE cate_name = '$cate_name' LIMIT $begin,9";
                        $query = mysqli_query($connect,$sql);
                        
                        ?>
                         <h3 class="title"> Sản phẩm thuộc danh mục: '<?php echo $cate_name ?>' </h3>
                         <?php
                           while ($product_like = mysqli_fetch_assoc($query)) {
                           ?>
                  <div class="col-md-4 col-sm-4">
                    <div class="products">
                      <div class="thumbnail">
                        <a href="index.php?pages=product-detail&<?php echo $product_like['id'] ?>">
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
                        <button class="button add-cart" type="button">
                          Thêm giỏ hàng
                        </button>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <?php }; ?>


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
                    <a <?php if($i==$trang){echo 'style="background:red"';}else{ echo '';} ?> href="index.php?pages=category-fitler&id=3&trang=<?php echo $i ?>" class="" style="font-size: 20px;">
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