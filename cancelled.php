<html>
<body > 
    <style>
        body{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh0m5zMFcRknp3gZI-_RM84EPq3Ot0g6pRxg&usqp=CAU');
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;text-align:center;
        }
        table{
            padding-top:100px;
            margin:auto;
        }
        td{
            color:green;
            font-size: x-large;
            font-weight: 900;
            text-transform:uppercase;
        }
        a{
            background-color: rgb(99, 99, 245); /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            margin:auto;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        a:hover{
            background-color: blue;
        }
        .inputs{
            padding: 10px 15px;
            margin-bottom:8px;
            color:red;
        }
    </style>

<?php
session_start();
require "db.php";

$query="SELECT * FROM ticket where status='CANCELLED' ";
$result=mysqli_query($conn,$query);

echo "<table><thead><td>PNR</td><td>Train_no</td><td>Date_Of_Journey</td><td>Train_Class</td><td>Seats</td><td>Status</td></thead>";

while ($row=mysqli_fetch_array($result))
{
echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[4]."</td><td>".$row[8]."</td><td>".$row[11]."</td><td>".$row[9]."</td></tr>";
}

echo "</table>";
echo "<br><a href=\"http://localhost/railway/admin_page.php\"><input type=\"submit\"  value=\"Go Back\"/></a> ";

$conn->close();
?>

</body>
</html>




