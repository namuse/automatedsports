<?php
require('connection.php');

session_start();
// If your session isn't valid, it returns you to the login screen for protection
if (empty($_SESSION['member_id'])) {
    header("location:access-denied.php");
}
?>
<html>

<head>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #header {
            background-color: #007bff; /* Change header background color to blue */
            color: white;
            padding: 10px;
            text-align: center;
        }

        #container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 980px;
        }

        #container img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        #header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <center><b><font color="blue" size="6">SPORTS<br>MANAGEMENT SYSTEM</font></b></center>
    <div id="page">
        <div id="header">
            <h1>PLAYERS HOME </h1>
            <a href="student.php">VIEW RESULTS</a> |
            <a href="event.php">UPCOMING EVENTS</a> |
            <a href="manage-profile.php">Manage My Profile</a> |
            <a href="changepass.php">Change Password</a> |
            <a href="logout.php">Logout</a>
        </div>
        <div id="container">
            <a href="#"><img src="images/abuu.jpg" height="300" width="980" alt="Image resize"></a>
        </div>
    </div>
</body>

</html>
