<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
$Full_Name=$_POST['Full_Name'];
$Email=$_POST['Email'];
$Contact_Number=$_POST['Contact_Number'];
$Message=$_POST['Message'];
$user_query="insert into contact (Full_Name,Email,Contact_Number,Message)values('$Full_Name','$Email','$Contact_Number','$Message')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));
$alert="<script> alert('आपले संदेश पाठविणे यशस्वी झाले')</script>";
echo $alert;
include 'home marathi.html';
?>

