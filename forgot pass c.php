<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));

if(isset($_POST['change']))
{
    $Contact_number=$_POST['Contact_number'];
    $Confirm_password=base64_encode($_POST['Confirm_password']);
    $query="SELECT * FROM customerp WHERE Phone_Number='$Contact_number' LIMIT 1";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        $sql="UPDATE customerp SET Password='$Confirm_password' WHERE customerp.Phone_Number='$Contact_number'";
        $result=mysqli_query($con,$sql);
       
        if($result)
        {
            include 'customer portal.html'; 
        }
        else
        {
            $alert="<script> alert('Something went wrong')</script>";
            echo $alert;
            include 'forgot pass c.html';
        } 
    }
    else{
        $alert="<script> alert('This number is not registered number')</script>";
        echo $alert;
        include 'forgot pass c.html';
    }
}
?>  

