<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>शेतकर्‍यांच्या उत्पादनाचा माहिती</title>
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
            font-size:25px;
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
            border-bottom: 5px solid black;
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
                <a href="#"class="navbar-brand">पोर्टल</a>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="farmers data mara.html"><span class="glyphicon glyphicon-plus-sign"></span>उत्पादने जोडा</a></li>
                        <li><a href="home.html"><span class="glyphicon glyphicon-home"></span>मुख्यपृष्ठ</a></li>
                    
                    </ul>
                </div>
            </div>
        </nav>
        <h1>शेतकर्‍यांच्या उत्पादनाचा माहिती</h1>
        <div class="container-fluid">
            <table class="table table hover sticky">
                <tbody>
                    <tr>
                        <th>ओळख क्रमांक</th>
                        <th>पहिले नाव</th>
                        <th>आडनाव</th>
                        <th>भाषा</th>
                        <th>गावचे नाव</th>
                        <th>पिन कोड</th>
                        <th>वर्ग</th>
                        <th>किंमत</th>
                        <th>१ किलो मध्ये किंमत</th>
                        <th>उपलब्ध प्रमाण</th>
                        <th>मूळ चित्र</th>
                    </tr>
                    <?php
                    $con=mysqli_connect("localhost","root","","project") or die(mysqli_error($con));
                    if($con->connect_error)
                    {
                        die("connection failed:".$con->connect_error);
                    }
                    $sql="SELECT ID,First_name,Last_name,Language,Village_name,pincode,Choose_one,price,kg,Available_quantity,photo from farmers_data";
                    $result=$con->query($sql);
                    
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            echo "<tr><td>".$row["ID"]."</td><td>".$row["First_name"]."</td><td>".$row["Last_name"]."</td><td>".$row["Language"]."</td><td>".$row["Village_name"]."</td><td>".$row["pincode"]."</td><td>".
                            $row["Choose_one"]."</td><td>".$row["price"]."</td><td>".$row["kg"]."</td><td>".$row["Available_quantity"]."</td><td>".$row["photo"]."<tr></td >";
                        }
                        echo"</table>";
                    }
                    else
                    {
                        "0 result";
                    }
                    $con->close();
                    ?>
                    <a href="#"><button type="NEXT"class="btn btn-lg btn-success">NEXT</button></a>
                </tbody>
            </table>
        </div>
        <footer>
            <div class="footer">
            <p1>“शेतकर्‍यांसाठी कॉपीराइट २०२१ ई-पोर्टल"</p1>
            </div>
        </footer>
    </body>
</html>
    