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
        $alert="<script> alert('ग्राहक लॉगिन यशस्वी')</script>";
        echo $alert;
        include 'farmers data mara.html';
    }
    else{
        $alert="<script> alert('ग्राहक लॉगिन अयशस्वी. कृपया आपला संपर्क क्रमांक आणि संकेतशब्द तपासा')</script>";
        echo $alert;
        include 'farmer login mara.html';
       
    }
}
?>

