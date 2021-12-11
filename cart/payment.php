<?php
	session_start();
include('../database/connect.php');
	if(isset($_POST['btncart'])){
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $bill = $_POST['bill'];
    }
    foreach($_SESSION['cart'] as $key => $value){
        $id_product = $value['id'];
        $total = $value['total'];
        $product_name = $value['title'];
    }
    
	$username = $_SESSION['login_user'];
	$code_card = rand(0,9999);

	$insert_cart = "INSERT INTO cart(code_cart, user_name, id_product, product_name, total , bill, phone , address, status) 
    VALUE('$code_card', '$username', '$id_product', '$product_name.', '$total', '$bill' ,'$phone','$address','1')";
	$query = mysqli_query($connect,$insert_cart);
	unset($_SESSION['cart']);
	header('Location:thank.php');


?>