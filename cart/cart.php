<?php
    require_once('../database/connect.php');
    session_start();
//them so luong
if(isset($_GET['cong'])){
    $id=$_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]= array(
                'title'=>$cart_item['title'],
                'id'=>$cart_item['id'],
                'total'=>$cart_item['total'],
                'price'=>$cart_item['price'],
                'thumbnail'=>$cart_item['thumbnail']);
            $_SESSION['cart'] = $product;
        }
        else
        {
            $tangsoluong = $cart_item['total'] + 1;
            if($cart_item['soluong']<=9){
                $product[]= array(
                    'title'=>$cart_item['title'],
                    'id'=>$cart_item['id'],
                    'total'=>$tangsoluong,
                    'price'=>$cart_item['price'],
                    'thumbnail'=>$cart_item['thumbnail']);
            }else{
                $product[]= array(
                    'title'=>$cart_item['title'],
                    'id'=>$cart_item['id'],
                    'total'=>$cart_item['total'],
                    'price'=>$cart_item['price'],
                    'thumbnail'=>$cart_item['thumbnail']);
            }
            $_SESSION['cart'] = $product;
        }
        
    }
    header('location:viewcart.php');
}
//tru so luong
if(isset($_GET['trusp'])){
    $id=$_GET['trusp'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]= array(
                'title'=>$cart_item['title'],
                'id'=>$cart_item['id'],
                'total'=>$cart_item['total'],
                'price'=>$cart_item['price'],
                'thumbnail'=>$cart_item['thumbnail']);
            $_SESSION['cart'] = $product;
        }
        else
        {
            $tangsoluong = $cart_item['total'] - 1;
            if($cart_item['soluong']>1){
                $product[]= array(
                    'title'=>$cart_item['title'],
                    'id'=>$cart_item['id'],
                    'total'=>$tangsoluong,
                    'price'=>$cart_item['price'],
                    'thumbnail'=>$cart_item['thumbnail']);
            }else{
                $product[]= array(
                    'title'=>$cart_item['title'],
                    'id'=>$cart_item['id'],
                    'total'=>$cart_item['total'],
                    'price'=>$cart_item['price'],
                    'thumbnail'=>$cart_item['thumbnail']);
            }
            $_SESSION['cart'] = $product;
        }
        
    }
    header('location:viewcart.php');
}
  
    // xóa tung san pham
    if(isset($_SESSION['cart'])&&isset( $_GET['xoa'])){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!= $id){
                $product[] = array(
                    'id'=>$cart_item['id'],
                    'title'=>$cart_item['title'],
                    'price'=>$cart_item['price'],
                    'thumbnail'=>$cart_item['thumbnail'],
                    'total'=>$cart_item['total']);
            }
            $_SESSION['cart'] = $product;
            header('location:viewcart.php');
        } 
    }
    // huy don hang
    if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('location:viewcart.php');
    }
    
    // them san pham vao gio hang
    if(isset($_POST['addcart'])){
        $id = $_GET['id'];
        $total = 1;
        $sql = "SELECT * FROM product WHERE id = '".$id."' LIMIT 1";
        $query = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($query);
        if($row){
            $new_product = array(array(
                'id'=>$row['id'],
                'title'=>$row['title'],
                'price'=>$row['price'],
                'thumbnail'=>$row['thumbnail'],
                'total'=>$total 
            ));
            // kiem tra seesion gio hang ton tai
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    // neu du lieu trung
                    if($cart_item['id'] == $id){
                        $product[] = array(
                            'id'=>$cart_item['id'],
                            'title'=>$cart_item['title'],
                            'price'=>$cart_item['price'],
                            'thumbnail'=>$cart_item['thumbnail'],
                            'total'=>$total+1);
                        $found = true;
                    }
                    // neu du lieu khong trung
                    else{
                        $product[] = array(
                            'id'=>$cart_item['id'],
                            'title'=>$cart_item['title'],
                            'price'=>$cart_item['price'],
                            'thumbnail'=>$cart_item['thumbnail'],
                            'total'=>$total);
                    }
                }
                if($found == false){
                    // lien ket du lieu new_product voi product
                    $_SESSION['cart']=array_merge($product,$new_product);
                }
                else{
                    $_SESSION['cart']= $product;
                }
            }
            else{
                $_SESSION['cart'] = $new_product;
            }
        }
            // print_r($_SESSION['cart']);
            header('location:viewcart.php');

    
        }   
        
?>