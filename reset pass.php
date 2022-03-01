<?php
$con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
if(isset($_POST['change']))
{
    $password=$_POST['Old_password'];
    $Confirm_password=$_POST['Confirm_password'];
    $sql="UPDATE 'farmers_portal' SET Password='$Confirm_password'WHERE Password='$password'  LIMIT=1";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"set";
    }
    else
    {
        echo"no";
    }
}

?>
