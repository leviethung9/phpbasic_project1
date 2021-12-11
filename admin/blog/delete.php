<?php
require('../database/connect.php');
// xu ly xoa bai viet
$id = $_GET['id'];
$sql_del = "DELETE FROM post WHERE id = $id ";
$query = mysqli_query($connect,$sql_del);
header("location: index.php?page_layout=");

?>
