<!DOCTYPE html>
<html>
<head>
<title>Plum.com - where people live healthy life</title>
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
        background:#09F;
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
input{
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
<br>
<h2><center>
Welcome
</center>
</h2>

<ul style="color:#FFF">
    <li><a href="">Profile &#9662; </a>
    	<ul class="dropdown">
        <li><a href="profile.php">Me</a></li>
        <li><a href="community.php">Community</a></li>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="help.php">Help</a></li>
        </ul>
    </li>
    <li><a href="logout.php">Log Out</a></li>
</ul>
</div>
<div id="columnLeft">
Abc
</div>
<div id="columnRight">
<hr>    
</div>


<h4>Copyright(c) Donut Company 2016, <span>Plum.</span></h4>
<center>
<a href="https://play.google.com/store"><img src="en_badge_web_generic.png" alt="Plum at Android" width="250" height="110"></a>
</center>
</body>
</html>