<html>
    <body>
        <style>
            body{
                background-image:url('https://thumbs.dreamstime.com/z/social-media-background-man-icon-notification-vector-marketing-blog-new-user-bubble-online-business-team-backdrop-men-111500013.jpg');
                height: 100%; 
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                text-align:center;
                margin-top:200px;
            }
            .name{
                color:blue;
                list-style-type: none;
                padding: 200px;
            }
            a{
                background-color: green;
                color: white;
                padding: 14px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size:larger;
                font-weight:400;
            }
            a:hover{
                background-color: blue;
            }
        </style>
    
<?php

session_start();
require "db.php";

echo " <br><a href=\"http://localhost/railway/insert_into_stations.php\"> Show All Stations </a><br> ";//done
echo " <br><a href=\"http://localhost/railway/show_trains.php\"> Show All Trains </a><br> ";//done
echo " <br><a href=\"http://localhost/railway/show_users.php\"> Show All Users </a><br> "; //done
echo " <br><a href=\"http://localhost/railway/insert_into_train.html\"> Enter New Train </a><br> ";//done
echo " <br><a href=\"http://localhost/railway/insert_into_classes.php\"> Enter Seat Arrangement </a><br> ";//done
echo " <br><a href=\"http://localhost/railway/booked.php\"> View all booked tickets </a><br> "; //need to check after the ticket data is added
echo " <br><a href=\"http://localhost/railway/cancelled.php\"> View all cancelled tickets </a><br> "; //need to check after ticket data is added
echo " <br><a href=\"http://localhost/railway/logout.php\"> Logout </a><br> "; //done

?>
</body>
</html>