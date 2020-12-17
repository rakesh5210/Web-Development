<?php
header('location:login.php');
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'store');


$name = $_POST['user'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];


$s = "select * from users where Username='$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num>0){
    echo"Username Already Taken. Please choose a new.";
}
else{
    $reg = "insert into users (Name, Email, Password, Address, City, Mobile, Username) values ('$name','$email','$pass','$address','$city','$mobile','$username')";
    mysqli_query($con, $reg);
    echo "Registration Successfull.";
}
?>