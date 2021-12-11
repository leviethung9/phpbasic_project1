<?php

session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Shop</title>
      <link href="public/fashion/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="public/fashion/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="public/fashion/css/flexslider.css" type="text/css" media="screen"/>
      <link href="public/fashion/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="public/fashion/css/style.css" rel="stylesheet">
      
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.php"><img src="public/fashion/images/logo.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="#">Giới thiệu</a></li>
                                 <li><a href="#">Tin tức</a></li>
                                 <li><a href="#">dịch vụ</a></li>
                                 <li><a href="#">Tuyển dụng</a></li>
                                 <li><a href="#">hình ảnh  - video</a></li>
                                 <li><a href="#">Hỗ trợ</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="auth/login.php" class="log">Đăng nhập</a></li>
                                 <li><a href="index.php?pages=register" class="reg">Đăng ký</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                        <li class="option-cart" style="padding-right: 10px;">
                           <p style="color: #fff;">
                           <?php 
                              
                              if(isset($_SESSION['login_user'])){
                                 echo ' Xin chào: ';
                                 echo $_SESSION['login_user'];
                                 echo '<br>';
                             echo '<a style="color: #fff;" href="auth/logout.php">Đăng xuất</a>';
                             }
                             
                            ?>
                           </p>
                           
                           </li>
                           <li id="search" class="search">
                              <form method="POST" action="index.php?pages=search">
                                 <input type="text" placeholder="từ khóa" name="keyword" style="width: 100px!important">
                                 <button type="submit" name="search" class="btn" style=""><i class="fa fa-search"></i></button>
                              </form>
                           </li>
                           <li class="option-cart">
                              <a href="cart/viewcart.php" class="cart-icon">Giỏ hàng</a>
                           </li>
                          
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active">
                                 <a href="index.php" >Trang chủ</a>
                              </li>
                            <li><a href="index.php?pages=shop">Cửa hàng</a></li>
                            <li><a href="index.php?pages=blog">Tin tức</a></li>
                            <li><a href="index.php?pages=about-us">Giới thiệu</a></li>
                            <li><a href="index.php?pages=contact">Liên hệ</a></li>
                            <li>
                            
                            </li>
                            
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="clearfix"></div>
        <!-- include -->
        <?php
                if (isset($_GET['pages'])) {
                    switch ($_GET['pages']) {

                        case 'shop':
                           include_once 'pages/shop.php';
                           break;
                        case 'blog':
                           include_once 'pages/blog.php';
                           break;
                        case 'about-us':
                           include_once 'pages/about-us.php';
                           break;
                        case 'contact':
                           include_once 'pages/contact.php';
                           break;
                           case 'register':
                        include_once 'pages/register.php';
                           break;
                        case 'login':
                           include_once 'pages/login.php';
                           break;
                        case 'product-detail':
                           include_once 'pages/product-detail.php';
                           break;
                        case 'blog-detail':
                           include_once 'pages/blog-detail.php';
                           break;
                        case 'category-fitler':
                           include_once 'pages/category-fitler.php';
                           break;
                        case 'blog-filter':
                           include_once 'pages/blog-filter.php';
                           break;
                        case 'search':
                           include_once 'pages/search.php';
                           break;
                        
                        
                    }
                } else {
                    include_once 'pages/home.php';
                }
                ?>
        <!-- include end -->
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="public/fashion/images/logo.png" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title"> <strong>Thông tin</strong>  </h4>
                        <p>Mỹ Đình - Hà Nội</p>
                        <p>SDT : (084) 1900 1008</p>
                        <p>Email : demo@gmail.com</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title"><strong> Hỗ trợ</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Payment Option</a></li>
                           <li><a href="#">Booking Tips</a></li>
                           <li><a href="#">Infomation</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title"> <strong>Đăng ký nhận tin </strong></h4>
                        
                        <form class="newsletter">
							<input type="text" name="" placeholder=" Email....">
							<input type="submit" value="Đăng ký" class="button">
						</form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright © 2021 shop thời trang</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="public/fashion/js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="public/fashion/js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="public/fashion/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="public/fashion/js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="public/fashion/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="public/fashion/js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="public/fashion/js/script.min.js" ></script>
     
   </body>
</html>