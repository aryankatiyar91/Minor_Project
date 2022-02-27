<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Farmers Product Data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .footer{
            padding: 10px 0;
            background-color:whitesmoke;
            color:#555454; 
            bottom: 0;  
            width: 100%;
            text-align:center;
            font-weight: bold;
        }
        table{
            border-collapse: collapse;
            color:black;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size:20px;
            font-weight:bold;
            text-align:center;
            border:1px solid black;

        }
        th{
            background-image:url("water-drops-on-the-fresh-green-leaf-photo.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color:ghostwhite;
            font-weight:bold;
            
        }
        body{
            background-image: url("backgriund.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .table.sticky th{
            position:sticky;
            top:0;
            border-bottom: 1px solid black;
        }
        td{
            border:1px solid grey;
        }
        .btn{
            float:right;
            
        } 
        h1{
            font-family:monospace;
            font-weight: bold;
            text-align: center;
        }
       

    </style>
    </head>
    <body>
    <nav class="navbar navbar-default">
            <div class="container">
                <a href="#"class="navbar-brand">Portal</a>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="farmers info.php"><span class="glyphicon glyphicon-align-left"></span>Farmers Details</a></li>
                        <li><a href="customer to farmers.html"><span class="glyphicon glyphicon-phone"></span>Contact to Farmer</a></li>
                        <li><a href="help ci.html"><span class="glyphicon glyphicon-question-sign"></span>Help</a></li>
            
                    
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Data Of Farmers Product</h1>
        <div class="container-fluid">
            <table class="table table hover sticky">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Language</th>
                        <th>Village name</th>
                        <th>Pincode</th>
                        <th>Choose one</th>
                        <th>Price</th>
                        <th>Price in Kg</th>
                        <th>Available Quantity</th>
                        <th>Original picture</th>
                    </tr>
                    <?php
                    $con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
                    if($con->connect_error)
                    {
                        die("connection failed:".$con->connect_error);
                    }
                    $sql="SELECT ID,First_name,Last_name,Language,Village_name,pincode,Choose_one,price,kg,Available_quantity,photo from farmers_data";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result))
                        {
                           echo "<tr>
                           <td>".$row['ID']."</td>
                           <td>".$row['First_name']."</td>
                           <td>".$row['Last_name']."</td>
                           <td>".$row['Language']."</td>
                           <td>".$row['Village_name']."</td>
                           <td>".$row['pincode']."</td>
                           <td>".$row['Choose_one']."</td>
                           <td>".$row['price']."</td>
                           <td>".$row['kg']."</td>
                           <td>".$row['Available_quantity']."</td>
                           <td><a href='$row[photo]'><img src='".$row['photo']."'height='100'width='100'/></a></td>
                           </tr>";

                        }
                    $con->close();
                    ?>
                    </tbody>
            </table>
            <a href="farmers info.php"><button type="NEXT"class="btn btn-lg btn-success">NEXT</button></a>
        </div>
       <footer>
            <div class="footer">
                <p1>“Copyright © 2021 E-PORTAL FOR FARMERS"</p1>
            </div>
        </footer>
    </body>
</html>
    