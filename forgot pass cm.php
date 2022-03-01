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
            include 'customer portal mara.html'; 
        }
        else
        {
            $alert="<script> alert('काहीतरी चूक झाली')</script>";
            echo $alert;
            include 'forgot pass cm.html';
        } 
    }
    else{
        $alert="<script> alert('हा क्रमांक नोंदणीकृत क्रमांक नाही')</script>";
        echo $alert;
        include 'forgot pass cm.html';
    }
}
?>  

