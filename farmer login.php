<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));

if(isset($_POST['login']))
{
    $Contact_number=$_POST['Contact_number'];
    $password=base64_encode($_POST['Password']);
    
    $query="select * from farmers_portal where Contact_number='$Contact_number' && password='$password'";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        $alert="<script> alert('Farmer login successful')</script>";
        echo $alert;
        include 'farmers data.html';
    }
    else{
        $alert="<script> alert('farmer login failed.Please check your Contact number and password')</script>";
        echo $alert;
        include 'farmer login.html';
    }
}
?>

