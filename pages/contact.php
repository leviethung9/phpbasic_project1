<?php
require_once('database/connect.php');
?>
<div class="container_fullwidth">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5 class="title contact-title">
          Liên hệ
        </h5>
        <div class="clearfix">
        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.306877626792!2d105.77446276540229!3d21.020403643438414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ac07228aff%3A0xce3f8e359e6e2a28!2zxJDDrG5oIFRow7RuLCBN4bu5IMSQw6xuaCAyLCBU4burIExpw6ptLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1637217370292!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="clearfix">
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="contact-infoormation">
              <h5>
                Thông tin
              </h5>
              <p>
                với các thiết kế thiên về sự tối giản kết hợp những chi tiết tinh tế như thắt nơ, khăn quàng cổ nhẹ nhàng ... là biểu tượng cho nét đẹp nữ tính, dịu dàng mà đầy cuốn hút của thời trang.
              </p>
              <ul>
                <li>
                  <span class="icon">
                    <img src="public/fashion/images/message.png" alt="">
                  </span>
                  <p>
                    contact@gmail.com
                    <br>
                    support@michaeldesign.me
                  </p>
                </li>
                <li>
                  <span class="icon">
                    <img src="public/fashion/images/phone.png" alt="">
                  </span>
                  <p>
                    084. 93 668 2236
                    <br>
                    084. 93 668 6789
                  </p>
                </li>
                <li>
                  <span class="icon">
                    <img src="public/fashion/images/address.png" alt="">
                  </span>
                  <p>
                    Đình Thôn - Mỹ Đình
                    <br>
                    Hà Nội - Việt Nam
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="ContactForm">
              <h5>
                Liên hệ với chúng tôi
              </h5>
              <form>
                <div class="row">
                  <?php
                  ob_start();
                  if (isset($_POST['btnadd'])) {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $content = $_POST['content'];
                    $sql = "INSERT INTO feedback (name, phone, content) VALUES ('$name', '$phone', '$content') ";
                    $query = mysqli_query($connect, $sql);
                    header('location:contact.php');
                  }
                  ?>
                  <form action="#" method="post" role="form">
                    <div class="form-group">
                      <label for=""> Họ và tên </label>
                      <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="form-group">
                      <label for=""> Số điện thoại </label>
                      <input type="number" class="form-control" name="phone" >
                    </div>
                    <div class="form-group">
                      <label for=""> Nội dung </label>
                      <input type="text" class="form-control" name="content" >
                    </div>
                    <div class="form-group">
                      <button type="submit" value="Thêm" name="btnadd" class="btn btn-primary"> Thêm </button>
                    </div>
                  </form>

              </form>
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