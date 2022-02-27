
<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));

if(isset($_POST['login']))
{
    $Phone_Number=$_POST['Phone_Number'];
    $Password=base64_encode($_POST['Password']);
    $query="select * from customerp where Phone_Number='$Phone_Number' && Password='$Password'";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        $alert="<script> alert('customer Login successful')</script>";
        echo $alert;
        include 'farmer data collect.php';
        
    }
    else{
        $alert="<script> alert('login failed. please check your contact number and passwod')</script>";
        echo $alert;
        include 'customer portal.html';
    }
}
?>