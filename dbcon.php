<?php

$con = mysqli_connect('localhost','root','','store');

if($con){
    echo "Connection Build.";
}else {
    echo "Connection Not Build, Use Wamp.";
}
?>