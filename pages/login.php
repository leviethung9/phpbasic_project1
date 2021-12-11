<?php
require_once('../database/connect.php');
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
        $_SESSION['login'] = $username;
        header('location:../index.php');
    }
}

?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5" style="width: 100%;">
                    <div class="card-body">
                        <h3 class="text-center"> Đăng nhập </h3>
                        <p>
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