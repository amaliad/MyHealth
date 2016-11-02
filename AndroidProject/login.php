<!DOCTYPE html>
<html>
<head>
<title>Plum.com - Login</title>
<style type="text/css">
html{
	background:url(bgindex.jpg) center center no-repeat;
	background-size:cover;
	background-attachment: fixed;
	}
h2{
	color:white;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	text-align:center;
}
h4{
	color:white;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	text-align:center;
}
#header{
	position:relative;
	text-align:center;
	border:black;
	margin: 5px;
}
#afterdropdown{
	position:relative;
	text-align:center;
	border:black;
	margin: 5px;
	background:#09F;
}
ul{
        padding: 0;
        list-style: none;
		text-align:center;
		color:white;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
ul li{
        display: inline-block;
        position: relative;
        line-height: 21px;
        text-align: left;
}
ul li a{
        display: block;
        padding: 8px 25px;
        color:#FFF;
        text-decoration: none;
}
ul li a:hover{
	color: #000;
	background:#09F;
		}
ul li ul.dropdown{
        min-width: 50px;
        background:#f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
}
ul li:hover ul.dropdown{
        display: block;
}
ul li ul.dropdown li{
        display: block;
}
#columnLeft{
	text-align:center;
}
#columnRight{
	text-align:center;
}

#columnMain{
	text-align:center;
}
.button{
	background:#09F;
	color:#FFF;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	}

span{
	color:#09F;
	font-size:20px;
}
</style>
</head>
<body>
<div id="header">
	<a href="index.php"><img src="85326b9d-04b7-4e62-8783-2f5060f559cf.jpg" height="120" width="230"></a>
    <br><h2>Where people learn how to live healthy life</h2>

<ul style="color:#FFF">
	<li><a href="index.php">Home</a></li>
    <li><a href="login.php">Log In</a></li>
</ul>
</div>
<?php session_start();
if(isset($_SESSION['user'])) {
header('location:index.php'); }
require_once("koneksi.php");
?>
<center>
<form action="proseslogin.php" method="post">
<h1 style="color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">Login</h1>
<table>
<tbody>
<tr>
<td style="color:white; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">Username</td>
<td>: <input name="user" type="text" /></td>
</tr>
<tr>
<td style="color:white; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif">Password</td>
<td>: <input name="password" type="password"/></td>
</tr>
<tr style="text-align:center">
<td colspan="2" align="right"><br><center><input class="button" type="submit" value="Login" name="login" /> <input class="button" type="reset" value="Cancel" /></center></td>
</tr>
<tr>
<td colspan="2" align="center" style="color:#FFF"><h4>Don't have account yet? Sign in on our Android app.</h4></td>
</tr>
</tbody>
</table>
</form>
<hr>
<h4>Copyright(c) Donut Company 2016, <span>Plum.</span></h4>
<img src="en_badge_web_generic.png" width="250" height="110">
</center>
</body>
</html>