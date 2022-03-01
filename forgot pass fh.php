<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));

if(isset($_POST['change']))
{
    $Contact_number=$_POST['Contact_number'];
    $Confirm_password=base64_encode($_POST['Confirm_password']);
    $query="SELECT * FROM farmers_portal WHERE Contact_number='$Contact_number' LIMIT 1";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        $sql="UPDATE farmers_portal SET password='$Confirm_password' WHERE farmers_portal.Contact_number='$Contact_number'";
        $result=mysqli_query($con,$sql);
       
        if($result)
        {
            include 'farmer login hindi.html'; 
        }
        else
        {
            $alert="<script> alert('कुछ गलत हो गया')</script>";
            echo $alert;
            include 'forgot pass fh.html';
        } 
    }
    else{
        $alert="<script> alert('यह नंबर रजिस्टर्ड नंबर नहीं है')</script>";
        echo $alert;
        include 'forgot pass fh.html';
    }
}
?>  

