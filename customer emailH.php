
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
        $alert="<script> alert('ग्राहक लॉगिन सफल')</script>";
        echo $alert;
        include 'farmer data collect_H.php';
        
    }
    else{
        $alert="<script> alert('ग्राहक लॉगिन विफल। कृपया अपना संपर्क नंबर और पासवर्ड जांचें')</script>";
        echo $alert;
        include 'customer portal hindi.html';
    }
}
?>