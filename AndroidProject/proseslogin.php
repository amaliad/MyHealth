<!DOCTYPE html>
<html>
<head>
<title>Plum.com - Login</title>
</head>

<body>

<?php 
session_start();
require_once("koneksi.php");
$username = $_POST['user'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM userdata WHERE user = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username Belum Terdaftar!";
echo "<a href='login.php'> Back</a>";
}
else {
if($pass != $hasil['password']) {
echo "Password Salah!
";
echo "<a href='login.php'>Back</a>";
}
else {
$_SESSION[$username] = $hasil[$username];
header('location:indexsukseslogin.php');
}
}

?>


</body>
</html>