<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
$Contact_number=$_POST['Contact_number'];
$password=base64_encode($_POST['Password']);
$user_query="insert into farmer_login(Contact_number,password)values('$Contact_number','$password')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));
$alert="<script> alert('किसान लॉगिन सफल')</script>";
echo $alert;
include 'farmers data hindi.html';
?>
 