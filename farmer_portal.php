<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));


$first_name=$_POST['First_name'];
$middle_name=$_POST['Middle_name'];
$last_name=$_POST['Last_name'];
$taluka=$_POST['option'];
$full_address=$_POST['Full_address'];
$contact_number=$_POST['Contact_number'];
$email=$_POST['Email'];
$aadhar_card_number=$_POST['Aadhar_card_number'];
$password=base64_encode($_POST['Password']);


$user_query="insert into farmers_portal(first_name,middle_name,last_name,taluka,Full_address,Contact_number,email,Aadhar_card_number,password)
values('$first_name','$middle_name','$last_name','$taluka','$full_address','$contact_number','$email','$aadhar_card_number','$password')";
$user_submit=mysqli_query($con,$user_query)or die(mysqli_error($con));
$alert="<script> alert('Farmers Registration Successfull')</script>";
echo $alert;
include 'click page.html';

?>
