<?php
require_once('../database/connect.php');
ob_start();
session_start();
$err;
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $username = strip_tags($username);
    $username = addslashes($username);

    $password = strip_tags($password);
    $password = addslashes($password);

    $sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' ";
    $row = mysqli_query($connect ,$sql);
    $count = mysqli_num_rows($row);

    if($count == 0){
        $err = "Thông tin đăng nhập chưa chính xác";
        
    }
    else{
        $_SESSION['login_user'] = $username;
        header('location:../index.php');
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="https://gokisoft.com/uploads/2021/03/s-568-ico-web.jpg" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5" style="width: 100%;">
                    <div class="card-body">
                        <h3 class="text-center"> Đăng nhập </h3>
                        <p style="color:red">
                        <?php
                            if(isset($err)){
                                echo $err;
                            }
                            else{

                            }
                        ?>
                        </p>
                        
                        <form method="post" action="" autocomplete="off">
                           
                            <div class="form-group">
                                <label for="">username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>