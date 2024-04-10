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
  $encpass= $row['password'];
}
?>
<?php
// updating sql query
if (isset($_POST['changepass'])){
    $myId =  $_REQUEST['id'];
    $oldpass = md5($_POST['oldpass']);
    $newpass = $_POST['newpass'];
    $conpass = $_POST['conpass'];
    if($encpass == $oldpass)
    {
        if($newpass == $conpass)
        {
            $newpassword = md5($newpass); //This will make your password encrypted into md5, a high security hash
            $sql = mysqli_query($con,"UPDATE tbmembers SET password='$newpassword' WHERE member_id = '$myId'" );
            echo "<script>alert('Password Change')</script>";
        }
        else
        {
            echo "<script>alert('New and Confirm Password Not Match')</script>";
        }

    }
    else
    {
        echo "<script>alert('Old password not match')</script>";
    }


    // redirect back to profile
    // header("Location: manage-profile.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student Profile Management</title>
<!--<link href="css/user_styles.css" rel="stylesheet" type="text/css" />-->
<script language="JavaScript" src="js/user.js"></script>
</head>
<body bgcolor="tan">
     
<center><b><font color="blue" size="8">SCHOOL<br>SPORTS MANAGEMENT SYSTEM</font></b></center>
<div id="page">
<div id="header" style="background-color: #333; color: white; padding: 10px; text-align: center;">
  <h1>password change</h1>
  <a href="student.php" style="color: white;">Home</a>
</div>
<div id="container" style="margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 620px;">
<table border="0" width="620" align="center">
<CAPTION><h3>CHANGE PASSWORD</h3></CAPTION>
<form action="changepass.php?id=<?php echo $_SESSION['member_id']; ?>" method="post">
<table align="center">
<tr><td>Old Password:</td><td><input type="password" name="oldpass" maxlength="5" value=""></td></tr>
<tr><td>New Password:</td><td><input type="password" name="newpass" maxlength="5" value=""></td></tr>
<tr><td>Confirm New Password:</td><td><input type="password" name="conpass" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td></td><td><input type="submit" name="changepass" value="Update Profile"></td></tr>
</table>
</form>
<hr>
</div>
</body>
</html>
