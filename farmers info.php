<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Farmers Info</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        
        
        h1{
            text-align:center;
            font-family:monospace;
            font-weight:bold;
        }
        .footer{
            padding: 10px 0;
            background-color:whitesmoke;
            color:#555454; 
            bottom: 0;  
            width: 100%;
            text-align:center;
            font-weight: bold;
        }
        
        td{
            font-size:20px;
            text-align:center;
            border:1px solid grey;
            font-weight:bold;
        }
        .table.sticky th{
            position:sticky;
            top:0;
            border:1px solid black;
            border-bottom: 5px solid black;
        }
        table{
            border-collapse: collapse;
            color:black;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size:25px;
            text-align:center;
            border:1px solid black;

        }
        th{
            background-image:url("water-drops-on-the-fresh-green-leaf-photo.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color:gainsboro;
            font-weight:bold;
            font-size:25px;
            
        }
        body{
            background-image: url("backgriund.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .btn2{
            float:right;
        }
        .btn1{
            float:left;
        }
    </style>
    </head>
    <body>
    <nav class="navbar navbar-default">
            <div class="container">
                <a href="#"class="navbar-brand">E-Portal</a>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="customer to farmers.html"><span class="glyphicon glyphicon-phone"></span>Contact to Farmer</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1>Information Of All Farmers</h1>
        <div class="container">
            <table class="table table hover sticky">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Village Name</th>
                        <th>Contact number</th>

                        
                    </tr>
                    <?php
                    $con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
                    if($con->connect_error)
                    {
                        die("connection failed:".$con->connect_error);
                    }
                    $sql="SELECT ID,First_name,Middle_name,Last_name,Taluka,Contact_number from farmers_portal";
                    $result=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_assoc($result))
                        {
                           echo "<tr>
                           <td>".$row['ID']."</td>
                           <td>".$row['First_name']."</td>
                           <td>".$row['Middle_name']."</td>
                           <td>".$row['Last_name']."</td>
                           <td>".$row['Taluka']."</td>
                           <td>".$row['Contact_number']."</td>
                           </tr>";

                        }
                    $con->close();
                    ?>
                   
                </tbody>
            </table>
            <a href="customer to farmers.html"><button type="NEXT"class="btn btn-lg btn-success btn2">NEXT</button></a>
            <a href="farmer data collect.php"><button type="NEXT"class="btn btn-lg btn-success btn1">BACK</button></a>
        
        </div>
       
        <footer>
            <div class="footer">
                <p1>“Copyright © 2021 E-PORTAL FOR FARMERS"</p1>
            </div>
        </footer>
    </body>
</html>
    