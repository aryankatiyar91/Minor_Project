<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>किसानों के लिए संदेश</title>
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
        h1{
            font-family:monospace;
            font-weight: bold;
            text-align: center;
        }
        .table.sticky th{
            position:sticky;
            top:0;
            border-bottom: 1px solid black;
        }
        td{
            border:1px solid grey;
        }
        body{
            background-image: url("backgriund.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
       
    </style>
    </head>
    <body>
    <nav class="navbar navbar-default">
            <div class="container">
                <a href="#"class="navbar-brand">पोर्टल</a>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="farmers data hindi.html"><span class="glyphicon glyphicon-plus-sign "></span>उत्पाद जोड़ें</a></li>
                        <li><a href="home hindi.html"><span class="glyphicon glyphicon-log-out"></span>लॉग आउट</a></li>
                
                    
                    </ul>
                </div>
            </div>
        </nav>
        <h1>किसानों के लिए संदेश</h1>
        <div class="container-fluid">
            <table class="table table hover sticky">
                <tbody>
                    <tr>
                        <th>पहचान अंक</th>
                        <th>पूरा नाम</th>
                        <th>पूरा पता</th>
                        <th>संपर्क संख्या</th>
                        <th>संदेश</th>
                        
                    </tr>
                    <?php
                    $con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
                    if($con->connect_error)
                    {
                        die("connection failed:".$con->connect_error);
                    }
                    $sql="SELECT ID,Full_Name,Full_Address,Contact_Number,Messages from customer_to_farmers";
                    $result=$con->query($sql);
                    
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            echo "<tr><td>".$row["ID"]."</td><td>".$row["Full_Name"]."</td><td>".$row["Full_Address"]."</td><td>".$row["Contact_Number"]."</td><td>".
                            $row["Messages"]."<tr></td >";
                        }
                        echo"</table>";
                    }
                    else
                    {
                        "0 result";
                    }
                    $con->close();
                    ?>
                </tbody>
            </table>
        </div>
        <footer>
            <div class="footer">
                <p1>“कॉपीराइट © २०२१ किसानों के लिए ई-पोर्टल"</p1>
            </div>
        </footer>
    </body>
</html>
    