<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Sports Management System</title>
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
            text-decoration: none; /* Remove underline */
            font-weight: bold; /* Make font bold */
        }
        a:hover {
            color: darkblue; /* Change color on hover */
        }
    </style>
</head>
<body>
    <center><b><font color="brown" size="6">Sports Management System</font></b></center><br><br>
    <div id="page">
        <div id="header">
            <h1>Access Denied</h1>
            <a href="student.php">Home</a>
        </div>
        <div id="container">
            <div class="err">Access Denied!</div>
            <p>You don't have access to this resource. <a href="index.php">Click here</a> to login first.</p>
        </div>
    </div>
</body>
</html>
