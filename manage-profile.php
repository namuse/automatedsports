<?php
session_start();
require('connection.php');

//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
    header("location:access-denied.php");
} 
//retrive student details from the tbmembers table
$result=mysqli_query($con, "SELECT * FROM tbMembers WHERE member_id = '$_SESSION[member_id]'");
if (mysqli_num_rows($result)<1){
    $result = null;
}
$row = mysqli_fetch_array($result);
if($row)
{
    // get data from db
    $stdId = $row['member_id'];
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $email = $row['email'];
}
?>
<?php
// updating sql query
if (isset($_POST['update'])){
    $myId = addslashes($_GET['id']);
    $myFirstName = addslashes($_POST['firstname']); //prevents types of SQL injection
    $myLastName = addslashes($_POST['lastname']); //prevents types of SQL injection
    $myEmail = $_POST['email'];

    $sql = mysqli_query($con,"UPDATE tbMembers SET first_name='$myFirstName', last_name='$myLastName', email='$myEmail' WHERE member_id = '$myId'");

    // redirect back to profile
    header("Location: manage-profile.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Student Profile Management</title>
    <style>
        body {
            background-color: #f2f2f2;
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
            max-width: 620px;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 8px;
        }

        input[type="text"] {
            width: calc(100% - 16px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        hr {
            margin-top: 20px;
            border: none;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body bgcolor="tan">
     
<center><b><font color="blue" size="8">SCHOOL<br>SPORTS MANAGEMENT SYSTEM</font></b></center>
<div id="page">
<div id="header">
  <h1>MANAGE MY PROFILE</h1>
  <a href="student.php" style="color: white;">Home</a> 
</div>
<div id="container">
<table border="0" width="620" align="center">
<CAPTION><h3>UPDATE PROFILE</h3></CAPTION>
<form action="manage-profile.php?id=<?php echo $_SESSION['member_id']; ?>" method="post" onsubmit="return updateProfile(this)">
<table align="center">
<tr><td>First Name:</td><td><input type="text" name="firstname" value="<?php echo $firstName; ?>"></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lastname" value="<?php echo $lastName; ?>"></td></tr>
<tr><td>Email Address:</td><td><input type="text" name="email" value="<?php echo $email; ?>"></td></tr>
<tr><td>&nbsp;</td></td><td><input type="submit" name="update" value="Update Profile"></td></tr>
</table>
</form>
<hr>
</div>
</body>
</html>
