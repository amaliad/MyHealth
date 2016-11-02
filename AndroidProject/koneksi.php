<!DOCTYPE html>
<html>
<head>
<title>Plum connect</title>
</head>

<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "plum"; 
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! '); mysql_select_db($db);
?>
</body>
</html>