<?php
session_start();
?>
<html>
<head>
    <!--<link href="css/user_styles.css" rel="stylesheet" type="text/css" />-->
    <style>
        body {
            background-color: tan;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
        #page {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        a {
            color: blue;
        }
    </style>
</head>
<body>
<div id="page">
    <div id="header">
        <h1>Logged Out Successfully</h1>
    </div>
    <?php
    session_destroy();
    ?>
    <p align="center">You have been successfully logged out.</p>
    <br><br><br>
    <p align="center">Return to <a href="index.php">Login</a></p>
</div>
</body>
</html>
