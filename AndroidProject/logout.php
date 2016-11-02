<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
</head>

<body>

<?php session_start();
unset($_SESSION['user']);
?>
<center>
<?php
	echo "You've been logged out. Back to <br><a href='index.php'>home</a>";
?>
</center>


</body>
</html>