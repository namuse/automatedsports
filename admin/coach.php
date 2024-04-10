<!DOCTYPE html>
<html>
<head>
    <!--<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />-->
    <script language="JavaScript" src="js/admin.js"></script>
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
        #container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .bottom_addr {
            text-align: center;
        }
    </style>
</head>
<body>
    <center><b><font color="blue" size="6">SCHOOL<br>SPORTS MANAGEMENT SYSTEM</font></b></center>
    <div id="page">
        <div id="header">
            <h1>Coach Login</h1>
        </div>
        <div id="container">
            <form name="form1" method="post" action="checklogin.php" onsubmit="return loginValidate(this)">
                <table width="100%" border="0" cellpadding="3" cellspacing="1">
                    <tr>
                        <td width="78"><font color="black" size="5">Username/Email</font></td>
                        <td width="6">:</td>
                        <td width="294"><input name="myusername" type="text" id="myusername"></td>
                    </tr>
                    <tr>
                        <td><font color="black" size="5">Password</font></td>
                        <td>:</td>
                        <td><input name="mypassword" type="password" id="mypassword"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="Submit" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="footer">
            <div class="bottom_addr">Supervisor: Madam Ann Muchiri.</div>
        </div>
    </div>
</body>
</html>
