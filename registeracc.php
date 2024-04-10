<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School Sports Management System</title>
    <link rel="stylesheet" type="text/css" href="css/user_styles.css">
    <script src="js/user.js" type="text/javascript"></script>
    <style>
        /* Additional CSS styles */
        .form_background {
            background-color: #d3f7d3; /* Light green */
        }
    </style>
</head>
<body bgcolor="#f8f9fa">
    <center><b><font color="#0056b3" size="6">SCHOOL SPORTS MANAGEMENT SYSTEM</font></b></center>
    <div id="page">
        <div id="header">
            <h1>Player Self Registration Panel</h1>
        </div>

        <?php
        require('connection.php');
        if (isset($_POST['submit'])) {
            $myFirstName = addslashes($_POST['firstname']); 
            $myLastName = addslashes($_POST['lastname']); 
            $myEmail = $_POST['email'];
            $myPassword = $_POST['password'];

            $newpass = md5($myPassword); 

            $sql = mysqli_query($con, "INSERT INTO tbMembers(first_name, last_name, email, password) 
            VALUES ('$myFirstName', '$myLastName', '$myEmail', '$newpass') ");

            die("You have registered for an account.<br><br>Go to <a href=\"index.php\">Login</a>");
        }

        echo "<div class='form_background'><center><h3>Register an account by filling in the needed information below:</h3></center><br>";
        echo '<form action="registeracc.php" method="post" onsubmit="return registerValidate(this)" class="form_background">';
        echo '<table align="center"><tr><td>';
        echo "<tr><td>First Name:</td><td><input type='text' class='input_field' name='firstname' maxlength='15' value=''></td></tr>";
        echo "<tr><td>Last Name:</td><td><input type='text' class='input_field' name='lastname' maxlength='15' value=''></td></tr>";
        echo "<tr><td>Email Address:</td><td><input type='email' class='input_field' name='email' maxlength='100' id='email' value=''></td><td><span id='result' class='error_message'></span></td></tr>";
        echo "<tr><td>Password:</td><td><input type='password' class='input_field' name='password' maxlength='15' value=''></td></tr>";
        echo "<tr><td>Confirm Password:</td><td><input type='password' class='input_field' name='ConfirmPassword' maxlength='15' value=''></td></tr>";
        echo "<tr><td>&nbsp;</td><td><input type='submit' name='submit' value='Register Account' class='submit_btn'></td></tr>";
        echo "<tr><td colspan='2'><p>Already have an account? <a href='index.php' class='login_link'>Login Here</a></td></tr>";
        echo "</tr></td></table>";
        echo "</form>";
        ?>
    </div> 

    <div id="footer">
        <div class="bottom_addr">Supervisor: Madam Ann Muchiri</div>
    </div>
</body>
<script src="js/jquery-1.2.6.min.js"></script>
<script>
$(document).ready(function(){
  
    $('#email').blur(function(event){
        event.preventDefault();
        var emailId=$('#email').val();
        $.ajax({                     
            url:'checkuser.php',
            method:'post',
            data:{email:emailId},  
            dataType:'html',
            success:function(message) {
                $('#result').html(message);
            }
        });
    });
});
</script>
</html>
