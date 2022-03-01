<?php

$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));

$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$Last_name=$_POST['Language'];
$Village_name=$_POST['village_name'];
$pincode=$_POST['Pincode'];
$Choose_one=$_POST['option'];
$price=$_POST['Price'];
$kg=$_POST['kg'];
$available_quantity=$_POST['quantity'];
$photo=$_POST['photo']; 
$user_query="insert into farmers_data(First_name,Last_name,Language,Village_name,pincode,Choose_one,price,kg,Available_quantity,photo)values('$First_name','$Last_name','$Language','$Village_name','$pincode','$Choose_one','$price','$kg','$available_quantity','$photo')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));
$alert="<script> alert('यशस्वीरित्या शेतकरी त्यांचे उत्पादन तपशील ग्राहकांसाठी जोडा')</script>";
echo $alert;
include 'list M.php';

?>
