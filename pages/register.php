<?php 
    require_once('database/connect.php');

ob_start();
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO user (username, phone, password) VALUES ('$name','$phone', '$password') ";
    $query = mysqli_query($connect,$sql);
}
?>
<div class="clearfix">
</div>
<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="special-deal leftbar" style="margin-top:0;">
          <h4 class="title">
            Special
            <strong>
              Deals
            </strong>
          </h4>
          <div class="special-item">
            <div class="product-image">
              <a href="details.html">
                <img src="images/products/thum/products-01.png" alt="">
              </a>
            </div>
            <div class="product-info">
              <p>
                <a href="details.html">
                  Licoln Corner Unit
                </a>
              </p>
              <h5 class="price">
                $300.00
              </h5>
            </div>
          </div>
          <div class="special-item">
            <div class="product-image">
              <a href="details.html">
                <img src="images/products/thum/products-02.png" alt="">
              </a>
            </div>
            <div class="product-info">
              <p>
                <a href="details.html">
                  Licoln Corner Unit
                </a>
              </p>
              <h5 class="price">
                $300.00
              </h5>
            </div>
          </div>
          <div class="special-item">
            <div class="product-image">
              <a href="details.html">
                <img src="images/products/thum/products-03.png" alt="">
              </a>
            </div>
            <div class="product-info">
              <p>
                <a href="details.html">
                  Licoln Corner Unit
                </a>
              </p>
              <h5 class="price">
                $300.00
              </h5>
            </div>
          </div>
        </div>
        <div class="product-tag leftbar">
          <h3 class="title">
            Products
            <strong>
              Tags
            </strong>
          </h3>
          <ul>
            <li>
              <a href="#">
                Lincoln us
              </a>
            </li>
            <li>
              <a href="#">
                SDress for Girl
              </a>
            </li>
            <li>
              <a href="#">
                Corner
              </a>
            </li>
            <li>
              <a href="#">
                Window
              </a>
            </li>
            <li>
              <a href="#">
                PG
              </a>
            </li>
            <li>
              <a href="#">
                Oscar
              </a>
            </li>
            <li>
              <a href="#">
                Bath room
              </a>
            </li>
            <li>
              <a href="#">
                PSD
              </a>
            </li>
          </ul>
        </div>
        <div class="get-newsletter leftbar">
          <h3 class="title">
            Get
            <strong>
              newsletter
            </strong>
          </h3>
          <p>
            Casio G Shock Digital Dial Black.
          </p>
          <form>
            <input class="email" type="text" name="" placeholder="Your Email...">
            <input class="submit" type="submit" value="Submit">
          </form>
        </div>
        <div class="fbl-box leftbar">
          <h3 class="title">
            Facebook
          </h3>
          <span class="likebutton">
            <a href="#">
              <img src="images/fblike.png" alt="">
            </a>
          </span>
          <p>
            12k people like Flat Shop.
          </p>
          <ul>
            <li>
              <a href="#">
              </a>
            </li>
            <li>
              <a href="#">
              </a>
            </li>
            <li>
              <a href="#">
              </a>
            </li>
            <li>
              <a href="#">
              </a>
            </li>
            <li>
              <a href="#">
              </a>
            </li>
            <li>
              <a href="#">
              </a>
            </li>
            <li>
              <a href="#">
              </a>
            </li>
            <li>
              <a href="#">
              </a>
            </li>
          </ul>
          <div class="fbplug">
            <a href="#">
              <span>
                <img src="images/fbicon.png" alt="">
              </span>
              Facebook social plugin
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="checkout-page">
        <div class="card" style="width: 80%;">
        <div class="card-body">
            <h5 class="card-title">Đăng ký</h5>
            <br>
            <form action="#" method="post" role="form">
                <div class="form-group">
                    <label for=""> Họ và tên </label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label for=""> Số điện thoại </label>
                    <input type="number" class="form-control" name="phone" required>
                </div>
                <div class="form-group">
                    <label for=""> Password </label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" value="Thêm" name="register" class="btn btn-primary"> Đăng ký  </button>
                </div>
            </form>
        </div>
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
          Our
        </strong>
        Brands
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
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/themeforest.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/photodune.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/activeden.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
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
                  <img src="images/envato.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/themeforest.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/photodune.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/activeden.png" alt="">
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="brand-logo">
                  <img src="images/envato.png" alt="">
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