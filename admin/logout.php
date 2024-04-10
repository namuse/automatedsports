<html><head>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
</head>

<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?
session_start();
session_destroy();
?>
You have been successfully logged out of your control panel.<br><br><br>
Return to <a href="coach.php">Login</a>
</body></html>