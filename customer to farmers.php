<?php

$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
$full_Name=$_POST['Full_Name'];
$full_Address=$_POST['Full_Address'];
$contact_Number=$_POST['Contact_Number'];
$Messages=$_POST['Messages'];
$user_query="insert into customer_to_farmers(Full_Name,Full_Address,Contact_Number,Messages)values('$full_Name','$full_Address','$contact_Number','$Messages ')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));
$alert="<script> alert('successfully sent message to farmers')</script>";
echo $alert;
include 'customer to farmers.html';
?> 