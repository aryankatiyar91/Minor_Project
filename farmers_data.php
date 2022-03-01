<?php

$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));

$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$Language=$_POST['Language'];
$Village_name=$_POST['village_name'];
$pincode=$_POST['Pincode'];
$Choose_one=$_POST['option'];
$price=$_POST['Price'];
$kg=$_POST['kg'];
$available_quantity=$_POST['quantity'];

$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder="images/".$filename;
move_uploaded_file($tempname,$folder);

$user_query="insert into farmers_data(First_name,Last_name,Language,Village_name,pincode,Choose_one,price,kg,Available_quantity,photo)values('$First_name','$Last_name','$Language','$Village_name','$pincode','$Choose_one','$price','$kg','$available_quantity','$folder')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));
$alert="<script> alert('farmers successfully add their products detail')</script>";
echo $alert;
include 'list.php';

?>
