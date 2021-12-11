<?php
require('../database/connect.php');
// xu ly xoa san pham
$id = $_GET['id'];
$sql_del = "DELETE FROM product WHERE id = $id ";
$query = mysqli_query($connect,$sql_del);
header('location: index.php?page_layout=san-pham');

?>