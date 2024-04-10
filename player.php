<!DOCTYPE html>
<html>
<head>
    <!--<link href="css/user_styles.css" rel="stylesheet" type="text/css">-->
    <script language="JavaScript" src="js/user.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* Changed background color to a lighter shade */
            margin: 0;
            padding: 0;
        }
        #header {
            background-color: #333;
            color: white;
            padding: 20px; /* Increased padding for better visibility */
            text-align: center;
            margin-bottom: 20px; /* Added margin bottom for space between header and form */
        }
        #container {
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: calc(100% - 22px); /* Adjusted width to accommodate increased padding */
            padding: 14px; /* Increased padding for better input field size */
            margin-bottom: 20px; /* Increased margin for better spacing */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px; /* Slightly increased border radius */
            background-color: #fff;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .bottom_addr {
            text-align: center;
            padding-top: 20px; /* Added padding for better alignment */
            color: #666; /* Changed text color for better visibility */
            font-size: 14px; /* Reduced font size for better readability */
        }
        a {
            color: #007bff; /* Changed link color */
            text-decoration: none; /* Removed underline from links */
        }
        a:hover {
            text-decoration: underline; /* Added underline on hover for better UX */
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Player Login</h1>
    </div>
    <div id="container">
        <form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="30%"><font color="black" size="5">Username/Email</font></td>
                    <td width="5%">:</td>
                    <td width="65%"><input name="myusername" type="text" id="myusername"></td>
                </tr>
                <tr>
                    <td><font color="black" size="5">Password</font></td>
                    <td>:</td>
                    <td><input name="mypassword" type="password" id="mypassword"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" name="Submit" value="Login"></td>
                </tr>
            </table>
        </form>
        <div class="bottom_addr">
            Don't have an Account? <a href="registeracc.php"><b>Register Here</b></a>
        </div>
    </div>
    <div id="footer">
        <div class="bottom_addr">Supervisor: Madam Ann Muchiri</div>
    </div>
</body>
</html>
