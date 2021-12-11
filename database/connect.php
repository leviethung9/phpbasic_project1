<?php
$connect = mysqli_connect('localhost','root','','phpbase');

if($connect){
    mysqli_query($connect,"SET NAMES 'UTF8'");
    echo "";
}
else{
    echo "";
}
?>
