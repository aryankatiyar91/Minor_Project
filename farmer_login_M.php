_<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
$email=$_POST['Email'];
$password=base64_encode($_POST['Password']);
$user_query="insert into farmer_login(email,password)values('$email','$password')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));
$alert="<script> alert('शेतकरी नोंदणी यशस्वीफार्मर्स लॉगिन यशस्वी')</script>";
echo $alert;
include 'farmers data mara.html';
?>

