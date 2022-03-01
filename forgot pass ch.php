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
            include 'customer portal hindi.html'; 
        }
        else
        {
            $alert="<script> alert('कुछ गलत हो गया')</script>";
            echo $alert;
            include 'forgot pass ch.html';
        } 
    }
    else{
        $alert="<script> alert('यह नंबर रजिस्टर्ड नंबर नहीं है')</script>";
        echo $alert;
        include 'forgot pass ch.html';
    }
}
?>  

