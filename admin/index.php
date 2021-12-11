
<?php
require_once('database/connect.php');
ob_start();
session_start();
if(!isset($_SESSION['login'])){
    header('location:auth/login.php');
}
?>
<?php
require_once('header.php');
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
                    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin</a>
                </nav>
            </div>
        </div>

        <div class="row mt-5" style="margin-top: 55px;">
            <div class="col-2">
                <nav class=" d-none d-md-block bg-light sidebar" style="padding-left: 50px; padding-right:40px">
                    <div class="sidebar-sticky" >
                        <ul class="nav flex-column">
                            <p>
                                xin chào:
                                <?php
                                   
                                    if(isset($_SESSION['login'])){
                                        echo $_SESSION['login'];
                                        
                                    }
                                ?>
                            </p>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">
                                    <i class="bi bi-house-fill"></i>
                                    Thống kê
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page_layout=danh-muc">
                                <i class="fas fa-th-large"></i>
                                    Danh Mục sản phẩm
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page_layout=san-pham">
                                <i class="fas fa-tshirt"></i>
                                    Sản Phẩm
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page_layout=cate-post">
                                <i class="fas fa-th-large"></i>
                                    Chuyên mục bài viết
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page_layout=post">
                                <i class="fas fa-th-large"></i>
                                    Bài viết
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page_layout=unit_money">
                                <i class="fa fa-money-bill"></i>
                                    Đơn vị tiền
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page_layout=user">
                                <i class="fas fa-users"></i>
                                    Người dùng
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page_layout=cart">
                                <i class="fas fa-cart-plus"></i>
                                    Đơn hàng
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page_layout=comment">
                                <i class="fas fa-th-large"></i>
                                    Bình luận
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="auth/logout.php">
                                <i class="fa fa-sign-out-alt"></i>
                                    Đăng xuất
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-10">
                <!-- include -->
                <?php
                if (isset($_GET['page_layout'])) {
                    switch ($_GET['page_layout']) {
                       
                        // danh muc
                        case 'danh-muc':
                            include_once 'category/list.php';
                            break;
                        case 'add-category':
                            include_once 'category/add.php';
                            break;
                        case 'edit-category':
                            include_once 'category/edit.php';
                            break;
                        case 'delete-category':
                            include_once 'category/delete.php';
                            break;
                            // san pham
                        case 'san-pham':
                            include_once 'product/list.php';
                            break;
                        case 'add-product':
                            include_once 'product/add.php';
                            break;
                        case 'edit-product':
                            include_once 'product/edit.php';
                            break;
                        case 'delete-product':
                            include_once 'product/delete.php';
                            break;

                        // danh muc bai viet   
                        case 'cate-post':                     
                            include_once 'cate-post/list.php';
                            break;
                        case 'add-cate-post':
                            include_once 'cate-post/add.php';
                            break;
                        case 'edit-cate-post':
                            include_once 'cate-post/edit.php';
                            break;
                        case 'delete-cate-post':
                            include_once 'cate-post/delete.php';
                            break;

                        //  bai viet   
                        case 'post':                     
                            include_once 'post/list.php';
                            break;
                        case 'add-post':
                            include_once 'post/add.php';
                            break;
                        case 'edit-post':
                            include_once 'post/edit.php';
                            break;
                        case 'delete-post':
                            include_once 'post/delete.php';
                            break;

                        //  don vi tien   
                        case 'unit_money':                     
                            include_once 'money/list.php';
                            break;
                        case 'edit_unit_money':                     
                            include_once 'money/edit.php';
                            break;

                        //  nguoi dung   
                        case 'user':                     
                            include_once 'user/list.php';
                            break;

                        //  don hang  
                        case 'cart':                     
                            include_once 'cart/list.php';
                            break;
                        case 'detail-product-cart':                     
                            include_once 'cart/detail-product.php';
                            break;
                        case 'edit-status-cart':                     
                            include_once 'cart/edit-status-cart.php';
                            break;
                        
                        //  binh luan 
                        case 'comment':                     
                            include_once 'comment/list.php';
                            break;
                            }
                            
                } else  {
                    include_once 'dashboard.php';
                }
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
                        CKEDITOR.replace( 'content1' );
                </script>
</body>

</html>

