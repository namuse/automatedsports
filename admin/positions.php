<?php
session_start();
require('../connection.php');
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
$result=mysqli_query($con, "SELECT * FROM tbdepartments");
if (mysqli_num_rows($result)<1){
    $result = null;
}
?>
<?php
if (isset($_POST['Submit']))
{

$newPosition = addslashes( $_POST['position'] ); 

$sql = mysqli_query($con, "INSERT INTO tbdepartments (department_name) VALUES ('$newPosition')");

 header("Location: positions.php");
}
?>
<?php
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysqli_query($con, "DELETE FROM tbdepartments WHERE department_id='$id'");
 
 // redirect back to positions
 header("Location: positions.php");
 }
 else
 // do nothing
    
?>
<!DOCTYPE html PUBLIC >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administration Control Panel</title>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head>
<center><b><font color = "blue" size="6">SCHOOL<br>SPORTS MANAGEMENT SYSTEM</font></b></center>
<div id="page">
<div id="header">
  <h1>ADD SPORTS DEPARTMENT</h1>
  <a href="admin.php">Home</a> 
</div>
<boddy bgcolor="green ">
<table width="380" align="center">
<CAPTION><h3>ADD NEW DEPARTMENT</h3></CAPTION>
<form name="fmdepartments" id="fmdepartmentss" action="positions.php" method="post" onsubmit="return positionValidate(this)">
<tr>
    <td>Department Name</td>
    <td><input type="text" name="position" /></td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</table>
<hr>
<table border="0" width="420" align="center">
<CAPTION><h3>List Of existing Departments</h3></CAPTION>
<tr>
<th>Department ID</th>
<th>Department Name</th>
</tr>

<?php
//loop through all table rows
$inc=1;
while ($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" .$inc."</td>";
echo "<td>" . $row['department_name']."</td>";
echo '<td><a href="positions.php?id=' . $row['department_id'] . '">Delete Department</a></td>';
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
  <div class="bottom_addr">Supervisor: Madam Ann Muchiri</div>
</div>
</div>
</body>
</html>