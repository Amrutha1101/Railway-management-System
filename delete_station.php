<html>
<body style=" background-image: url(adminlogin.jpeg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

<?php

require "db.php";

$sql = "DELETE from station where station_id= ('".$_GET["id"]."')";
echo $_GET["id"];

if ($conn->query($sql) === TRUE) {
    echo " Record deleted successfully";
} else {
    echo "Error:" . $conn->error;
}

echo "<br> <a href=\"http://localhost/railway/admin_page.php\">Go Back to Admin Menu!!!</a> ";

$conn->close();
?>


</body>
</html>


