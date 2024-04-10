<?php
session_start();
require('../connection.php');
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
?>
<html>
<head>
    <!--<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />-->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        #header {
            background-color: #333;
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
            max-width: 800px;
        }
        #header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        #footer {
            margin-top: 20px;
            text-align: center;
            color: #888;
        }
        .bottom_addr {
            margin-top: 10px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <center><b><font color="blue" size="6">SCHOOL<br>SPORTS MANAGEMENT SYSTEM</font></b></center>
    <div id="page">
        <div id="header">
            <h1>Coach Dashboard</h1>
            <a href="admin.php">Back</a> | 
            <a href="positions.php">Add Sports Department</a> | 
            <a href="candidates.php">Add Event</a> | 
            <a href="#">Add Results</a> | 
            <a href="manage-admins.php">Edit Profile</a> | 
            <a href="change-pass.php">Change Password</a>  | 
            <a href="logout.php">Logout</a>
        </div>
        <div id="container">
            <p align="center">Click a link above to perform an administrative operation.</p>
        </div>
        <div id="footer">
            <div class="bottom_addr">Supervisor: Madam Ann Muchiri</div>
        </div>
    </div>
</body>
</html>
