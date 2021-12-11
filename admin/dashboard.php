<?php
    require_once("../database/connect.php");
    // count bang danh muc san pham
    $sql = "SELECT COUNT(*) as total FROM category";
    $query = mysqli_query($connect,$sql);
    $row1 = mysqli_fetch_assoc($query);

    // count bang san pham
    $sql = "SELECT COUNT(*) as total FROM product";
    $query = mysqli_query($connect,$sql);
    $row2 = mysqli_fetch_assoc($query);

    // count bang chuyen muc tin tuc
    $sql = "SELECT COUNT(*) as total FROM cate_post";
    $query = mysqli_query($connect,$sql);
    $row3 = mysqli_fetch_assoc($query);

    // count bang tin tuc
    $sql = "SELECT COUNT(*) as total FROM post";
    $query = mysqli_query($connect,$sql);
    $row4 = mysqli_fetch_assoc($query);

    // count bang user
    $sql = "SELECT COUNT(*) as total FROM user";
    $query = mysqli_query($connect,$sql);
    $row5 = mysqli_fetch_assoc($query);

    // count bang user
    $sql = "SELECT COUNT(*) as total FROM comment";
    $query = mysqli_query($connect,$sql);
    $row6 = mysqli_fetch_assoc($query);

    $sql = "SELECT COUNT(*) as total FROM money";
    $query = mysqli_query($connect,$sql);
    $row7 = mysqli_fetch_assoc($query);
    
?>
<div class="row">
  <div class="col-sm-4">
    <div class="card bg-primary text-white mb-3" >
      <div class="card-body border">
        <h5 class="card-title">Số lượng danh mục sản phẩm</h5>
        <h4 class="card-text"><?php echo $row1['total'] ?></h4>
        <a href="index.php?page_layout=danh-muc" class="btn btn-danger">Quản trị</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-success">
      <div class="card-body  border">
        <h5 class="card-title">Số lượng sản phẩm</h5>
        <h4 class="card-text"><?php echo $row2['total'] ?></h4>
        <a href="index.php?page_layout=san-pham" class="btn btn-danger">Quản trị</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-warning">
      <div class="card-body  border">
        <h5 class="card-title">Số lượng chuyên mục tin tức</h5>
        <h4 class="card-text"><?php echo $row3['total'] ?></h4>
        <a href="index.php?page_layout=cae-blog" class="btn btn-danger">Quản trị</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="card bg-primary text-white mb-3" >
      <div class="card-body border">
        <h5 class="card-title">Số lượng bài viết</h5>
        <h4 class="card-text"><?php echo $row4['total'] ?></h4>
        <a href="index.php?page_layout=danh-muc" class="btn btn-danger">Quản trị</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-success">
      <div class="card-body  border">
        <h5 class="card-title">Số lượng người dùng</h5>
        <h4 class="card-text"><?php echo $row5['total'] ?></h4>
        <a href="index.php?page_layout=user" class="btn btn-danger">Quản trị</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-warning">
      <div class="card-body  border">
        <h5 class="card-title">Số lượng comment</h5>
        <h4 class="card-text"><?php echo $row6['total'] ?></h4>
        <a href="index.php?page_layout=cae-blog" class="btn btn-danger">Quản trị</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card text-white bg-warning">
      <div class="card-body  border">
        <h5 class="card-title">Đơn vị tiền </h5>
        <h4 class="card-text"><?php echo $row7['total'] ?></h4>
        <a href="index.php?page_layout=unit_money" class="btn btn-danger">Quản trị</a>
      </div>
    </div>
  </div>
</div>
