<?php
require('connection.php');

session_start();
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}

?>
<?php
$departments=mysqli_query($con, "SELECT * FROM tbdepartments");
?> 
<?php
    // retrieval sql query
// check if Submit is set in POS
 if (isset($_POST['Submit']))
 {
 // get position value
 $position = addslashes( $_POST['position'] ); //prevents types of SQL injection
 
 // retrieve based on position
 $result = mysqli_query($con,"SELECT * FROM tbevents WHERE event_department='$position'");
 // redirect back to vote
 //header("Location: vote.php");
 }
 else
 // do something
  
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>events</title>
<!--<link href="css/user_styles.css" rel="stylesheet" type="text/css" />--> 
<script language="JavaScript" src="js/user.js">
</script>
<script type="text/javascript">
function getVote(int)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

	if(confirm("Your selection is for "+int))
	{
  var pos=document.getElementById("str").value;
  var id=document.getElementById("hidden").value;
  xmlhttp.open("GET","save.php?vote="+int+"&user_id="+id+"&position="+pos,true);
  xmlhttp.send();

  xmlhttp.onreadystatechange =function()
{
	if(xmlhttp.readyState ==4 && xmlhttp.status==200)
	{
  //  alert("dfdfd");
	document.getElementById("error").innerHTML=xmlhttp.responseText;
	}
}

  }
	else
	{
	alert("Choose another event that you are supposed to participate ");
	}
	
}

function getPosition(String)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.open("GET","vote.php?position="+String,true);
xmlhttp.send();
}
</script>
<script type="text/javascript">
$(document).ready(function(){
   var j = jQuery.noConflict();
    j(document).ready(function()
    {
        j(".refresh").everyTime(1000,function(i){
            j.ajax({
              url: "admin/refresh.php",
              cache: false,
              success: function(html){
                j(".refresh").html(html);
              }
            })
        })
        
    });
   j('.refresh').css({color:"green"});
});
</script>
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
        margin-bottom: 20px; /* Added spacing below the header */
    }

    #container {
        margin: 0 auto;
        padding: 20px;
        background: linear-gradient(to bottom right, #ffffff, #f2f2f2); /* Added subtle gradient background */
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

    table {
        width: 100%;
    }

    th {
        font-weight: bold;
        font-size: 18px;
        color: #333;
    }

    td {
        padding: 10px 0;
    }

    input[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    #error {
        color: red;
    }

    h3 {
        color: #333;
    }

    #footer {
        margin-top: 20px;
    }

    .bottom_addr {
        text-align: center;
        color: #333;
    }

    .home-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .home-link:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body bgcolor="tan">
<center>
<a href="student.php" class="home-link">Home</a><br>
<b><font color = "blue" size="8">SCHOOL SPORTS MANAGEMENT SYSTEM</font></b></center>
<body>
<div id="page">
<div id="header">
  <h1>UPCOMING EVENTS</h1>
</div>
<div class="refresh">
</div>
<div id="container">
<table width="420" align="center">
<form name="fmNames" id="fmNames" method="post" action="event.php" onSubmit="return positionValidate(this)">
<tr>
    <td>Choose Sports Department</td>
    <td><SELECT NAME="position" id="position" onclick="getPosition(this.value)">
    <OPTION VALUE="select">select
    <?php 
    //loop through all table rows
    while ($row=mysqli_fetch_array($departments)){
    echo "<OPTION VALUE=$row[department_name]>$row[department_name]"; 
    //mysql_free_result($positions_retrieved);
    //mysql_close($link);
    }
    ?>
    </SELECT></td>
    <td><input type="hidden" id="hidden" value="<?php echo $_SESSION['member_id']; ?>" /></td>
    <td><input type="hidden" id="str" value="<?php echo $_REQUEST['position']; ?>" /></td>
    <td><input type="submit" name="Submit" value="view event" /></td>
</tr>
<tr>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
</form> 
</table>
<table width="270" align="center">
<form>
<tr>
    <th>EVENTS</th>
</tr>


<?php
//loop through all table rows
//if (mysql_num_rows($result)>0){
  if (isset($_POST['Submit']))
  {
while ($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['event_name']."</td>";
echo "<td><input type='radio' name='vote' value='$row[event_name]' onclick='getVote(this.value)' /></td>";
echo "</tr>";
}
mysqli_free_result($result);
mysqli_close($con);
//}
  }
else
// do nothing
?>
<tr>
    <h3>CONTACT YOUR DEPARTMENT FOR MORE DETAILS CONCERNING THE EVENT OF YOUR INTREST</h3>
    <td>&nbsp;</td>
</tr>
</form>
</table>
<center><span id="error"></span></center>
</div>
<div id="footer"> 
  <div class="bottom_addr">Supervisor: LEC ANN MUCHIRI</div>
</div>
</div>
</body>
</html>
