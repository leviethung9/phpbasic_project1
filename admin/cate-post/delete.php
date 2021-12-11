<?php
require('../database/connect.php');
// xu ly xoa danh muc
$id = $_GET['id'];
$sql_del = "DELETE FROM cate_post WHERE id = $id ";
$query = mysqli_query($connect,$sql_del);
header('location: index.php?page_layout=cate-post');

?>
