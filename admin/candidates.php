<?php
session_start();
require('../connection.php');
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
} 
$result=mysqli_query($con,"SELECT * FROM tbevents");
if (mysqli_num_rows($result)<1){
    $result = null;
}
?>
<?php
$departments_retrieved=mysqli_query($con, "SELECT * FROM tbdepartments");
?>
<?php

if (isset($_POST['Submit']))
{

$neweventName = addslashes( $_POST['name'] ); //prevents types of SQL injection
$neweventdepartment = addslashes( $_POST['department'] ); //prevents types of SQL injection

$sql = mysqli_query($con, "INSERT INTO tbevents(event_name,event_department) VALUES ('$neweventName','$neweventdepartment')" );

// redirect back to candidates
 header("Location: candidates.php");
}
?>
<?php
// deleting sql query
// check if the 'id' variable is set in URL
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysqli_query($con, "DELETE FROM tbevents WHERE event_id='$id'");
 
 // redirect back to candidates
 header("Location: candidates.php");
 }
 else
 // do nothing   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administration Control Panels</title>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head>
<body bgcolor="tan">
<center><b><font color = "BLUE" size="8">SCHOOL<br>SPORTS MANAGEMENT SYSTEM</font></b></center><br><br>
<div id="page">
<div id="header">
  <h1>ADD EVENTS</h1>
  <a href="admin.php">Home</a>
</div>
<table width="380" align="center">
<CAPTION><h3>ADD NEW EVENTS</h3></CAPTION>
<form name="fmevents" id="fmevents" action="candidates.php" method="post" onsubmit="return candidateValidate(this)">
<tr>
    <td>Event Name</td>
    <td><input type="text" name="name" /></td>
</tr>
<tr>
    <td>Event Department</td>
    <!--<td><input type="combobox" name="department" value="<?php echo $departments; ?>"/></td>-->
    <td><SELECT NAME="department" id="department">select
    <OPTION VALUE="select">select
    <?php
    //loop through all table rows
    while ($row=mysqli_fetch_array($departments_retrieved)){
    echo "<OPTION VALUE=$row[department_name]>$row[department_name]";
    //mysql_free_result($positions_retrieved);
    //mysql_close($link);
    }
    ?>
    </SELECT>
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</table>
<hr>
<table border="0" width="620" align="center">
<CAPTION><h3>Existing Events</h3></CAPTION>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Event Department</th>
</tr>

<?php
//loop through all table rows
$inc=1;
while ($row=mysqli_fetch_array($result)){
    
echo "<tr>";
echo "<td>" . $inc."</td>";
echo "<td>" . $row['event_name']."</td>";
echo "<td>" . $row['event_department']."</td>";
echo '<td><a href="candidates.php?id=' . $row['event_id'] . '">Delete event</a></td>';
echo "</tr>";
$inc++;
}

mysqli_free_result($result);
mysqli_close($con);
?>
</table>
<hr>
</div>
<div id="footer"> 
  <div class="bottom_addr">Supervisor..madam Ann Muchiri</div>
</div>
</div>
</body>
</html>