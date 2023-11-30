<?php
	session_start();
	session_destroy();
	include"conn.php";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Logout | Gamecademy</title>
		<!-- google font icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<!-- local css file -->
		<link rel="stylesheet" type="text/css" href="Styles/BaseStyles.css" >
		<link rel="stylesheet" type="text/css" href="Styles/LogoutStyles.css" >	
	</head>
	<body>
		<!-- header section starts -->
		<header class="header" id="header">
			<b><button id="nav-btn" onclick="toggle_nav()">&#9776;</button></b>
		</header>
		<!-- header section ends -->
		<nav class="navbar" id="navbar">
			<div class="absolute-center">
				<a href="index.php">home</a>
				<a href="#tutorials">tutorials</a>
				<a href="#blogs">blogs</a>
				<a href="#about">about</a>
				<a href="#cta">get started</a>
				<a href="login.php">log in</a>		
				<a href="registration.php">register</a>		
			</div>
		</nav>	
		<section>
			<h1>Goodbye!</h1>
		</section>
		<script src="script.js"></script>
	</body>
</html>

