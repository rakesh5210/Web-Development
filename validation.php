<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'store');

//$name = $_POST['user'];
$username = $_POST['username'];
$pass = $_POST['password'];

$s = "select * from users where Username='$username' && Password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num>0){
    header('location:cart.php');
}
else{
    header('location:login.php');
}
?>