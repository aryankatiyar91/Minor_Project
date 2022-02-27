<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
$first_name=$_POST['First_name'];
$last_name=$_POST['Last_name'];
$Phone_Number=$_POST['Phone_Number'];
$password=base64_encode($_POST['Password']);
$user_query="insert into customerp(First_name,Last_name,Phone_Number,Password)values('$first_name','$last_name','$Phone_Number','$password')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));
$alert="<script> alert('customer registration successful')</script>";
echo $alert;
include 'click page.html';
?> 

