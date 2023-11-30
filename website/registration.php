<?php
	// start the session and create the connection
	session_start();
	include"conn.php";	
?>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "members";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn -> connect_error);
	}
	// Run when the SignUp button on the form is hit
	if (isset($_POST["SignUp"])) {
				
	// Assign a variable to each of the fields on the form. Ensure the values match the form field names exactly 
		$FName = $_POST["FirstName"];
		$LName = $_POST["LastName"];
		$SkillLevel = $_POST["SkillLevel"];
		$Email = $_POST["Email"];
		$Password = $_POST["Password"];
		$file = $_FILES["file"]["name"];			
		
			
		$sql = $conn->query("INSERT INTO members (first_name, last_name, skill_level, email, password, avatar) 
			Values('$FName', '$LName', '$SkillLevel', '$Email', '$Password', '$file')");
		
		// Specify the directory where the file is going to be placed
			$target_path = "uploads/";
		// $target_file specifies the path of the file to be uploaded
			$target_file = $target_path . basename($_FILES['file']['name']);
		// if everything is ok, try to upload file
			move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
		// Use the header function to redirect users to the login page
			header("Location: login.php");
		
	}
?>

<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styles/BaseStyles.css">
	<link rel="stylesheet" type="text/css" href="Styles/FormStyles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Registration Page</title>
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
		</div>
	</nav>		
	<div class="container">
		<div class="screen-1">
			<div class="logocontainer">
				<img src="images/logo.png"/>
			</div>
			<form id="RegisterForm" name="RegisterForm" method="post" action="" enctype="multipart/form-data">
				<div class="formelement ">
					<label for="firstname">First Name</label>
					<div class="sec-2">
						<input id="FirstName" type="text" name="FirstName" placeholder="First Name" style="text-transform:initial" required="required"/>
					</div>
				</div>
				<div class="formelement">
					<label for="lastname">Last Name</label>
					<div class="sec-2">
						<input id="LastName" type="text" name="LastName" placeholder="Last Name" style="text-transform:initial" required="required"/>
					</div>
				</div>					 
				<div class="formelement">
					<label for="skilllevel">Skill Level</label>
					<select name="SkillLevel" required class="textfield" id="SkillLevel" placeholder="Skill Level">
						<option value="Trainee">Trainee</option>
						<option value="Novice">Novice</option>
						<option value="Proficient">Proficient</option>
						<option value="Advanced">Advanced</option>
						<option value="Expert">Expert</option>
					</select>
				</div>							
				<div class="formelement">
					<label for="email">Email Address</label>
					<div class="sec-2">
						<input id="Email" type="email" name="Email" placeholder="username@gmail.com" style="text-transform:initial" required="required"/>
					</div>
				</div>
				<div class="formelement">
					<label for="password">Password</label>
					<div class="sec-2">
						<input id="Password" class="pas" type="password" name="Password" placeholder="· · · · · · · · · · · ·" oninput="checkPasswordStrength()" required="required"/>
						<p id="passwordStrength"></p>
						<ion-icon class="show-hide" name="eye-outline"></ion-icon>
					</div>
				</div>
				<div class="formelement">
					<label for="avatar">Avatar</label>
					<input id="avatar" name="file" type="file" required="required">
				</div>					
				<button name="SignUp" type="submit" class="button button-small primary-button" id="SignUp">SignUp</button>
				<div class="footer"><span>Already have an account? <a href="login.php">Log In.</a></span></div>
			</form>
		</div>	
	</div>
	<script src="password-strength-checker.js"></script>
	<script src="script.js"></script>
</body>
</html>
