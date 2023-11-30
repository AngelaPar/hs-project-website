<?php
	session_start();
	include "conn.php";
?>
<?php
	if (isset($_SESSION["UserID"])) {	
	}
	else {
		header("Location: login.php");
	}
	// Assign a local variable to the session variable USERID
	$user = $_SESSION["UserID"];
	
	// Select all values from the members table where the user_id mathces the variable $user
	// and store the values in an array, and assign this to 
	$result = $conn->query("select * from members where user_id='$user'");
	$row = $result->fetch_array();
?>
<?php
	// Check if the UpdateProfile button on the form has been hit
	// and set a local variable $id to the user_id of the logged in user
	if (isset($_POST['UpdateProfile'])) {
	// update session variables from the form
		$_SESSION['FirstName'] = $_POST['FirstName'];
		$_SESSION['LastName'] = $_POST['LastName'];
		$_SESSION['SkillLevel'] = $_POST['SkillLevel'];
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['AboutMe'] = $_POST['AboutMe'];
		$_SESSION['Password'] = $_POST['Password'];

		$id = $row["user_id"];
		
	// Assign a local variable to each field on the form
		$UpdateFirstName = $_POST['FirstName'];
		$UpdateLastName = $_POST['LastName'];
		$UpdateSkillLevel = $_POST['SkillLevel'];
		$UpdateEmail = $_POST['Email'];
		$UpdateAboutMe = $_POST['AboutMe'];
		$UpdatePassword = $_POST['Password'];
		
	// Send the values from the form to the members table
		$data = $conn->query("UPDATE members SET first_name = '$UpdateFirstName', 
		last_name = '$UpdateLastName', skill_level = '$UpdateSkillLevel', email = '$UpdateEmail', 
		password = '$UpdatePassword', about_me = '$UpdateAboutMe' where user_id = $user");
		
	// When the update query has run redirect the user to the members page or check for errors
		if ($data) {
?>			
			<script>window.location = "members.php?id=<?php echo $id;?>";</script>
<?php		
		}
		else {
?>
			<script>alert('Invalid Update');</script>
<?php		
		}
	}
?>
<?php
	// Check if the UpdateAvatar button on the form has been hit
	if (isset($_POST['UpdateAvatar'])) {
		if (!empty($_FILES['file']['name'])) {
			$id = $row['user_id'];
			$UpdateFile = $_FILES['file']['name'];
			$data = $conn->query("UPDATE members SET avatar = '$UpdateFile' where user_id = $user");
			// specify the directory where the file is going to be placed
			$target_path = "uploads/";
			// target_file specifies the path of the file to be uploaded
			$target_file = $target_path . basename($_FILES['file']['name']);
			// if everything is ok, try to upload file
			move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
?>
			<script>window.location = "members.php?id=<?php echo $id;?>";</script>
<?php
		}
		else {
?>
			<script>alert('No File Selected');</script>
<?php
		}
	}
?>	
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Styles/BaseStyles.css">
	<link rel="stylesheet" type="text/css" href="Styles/FormStyles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Your Profile</title>
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
			<a href="logout.php">log out</a>		
		</div>
	</nav>	
	<!-- header section ends -->
	<div class="container">
		<div class="screen-1">
			<div class="logocontainer">
				<img src="images/logo.png"/>
			</div>
			<form id="UpdateForm" name="UpdateForm" method="post" action="">
				<div class="formelement ">
					<label for="firstname">First Name</label>
					<div class="sec-2">
						<input id="FirstName" type="text" name="FirstName" placeholder="First Name" style="text-transform:initial" value="<?php echo $_SESSION["FirstName"];?>"/>
					</div>
				</div>
				<div class="formelement">
					<label for="lastname">Last Name</label>
					<div class="sec-2">
						<input id="LastName" type="text" name="LastName" placeholder="Last Name" style="text-transform:initial" value="<?php echo $_SESSION["LastName"];?>"/>
					</div>
				</div>					 
				<div class="formelement">
					<label for="skilllevel">Skill Level</label>
					<select name="SkillLevel" required class="textfield" id="SkillLevel" placeholder="Skill Level" value="<?php echo $_SESSION["SkillLevel"];?>"/>
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
						<input id="Email" type="email" name="Email" placeholder="username@gmail.com" style="text-transform:initial" value="<?php echo $_SESSION["Email"];?>"/>
					</div>
				</div>
				<div class="formelement">
					<input name="AboutMe" type="text" required="required" class="textfield" id="AboutMe" placeholder="Tell us about yourself" 
					value="<?php echo $row['about_me'];?>"/>
				</div>					
				<div class="formelement">
					<label for="password">Password</label>
					<div class="sec-2">
						<input id="Password" class="pas" type="password" name="Password" placeholder="· · · · · · · · · · · ·" value="<?php echo $_SESSION["Password"];?>" oninput="checkPasswordStrength()" required="required"/>
						<p id="passwordStrength"></p>
						<ion-icon class="show-hide" name="eye-outline"></ion-icon>
					</div>
				</div>				
				<button name="UpdateProfile" type="submit" class="button button-small primary-button" id="UpdateProfile">Update Profile</button>
			</form>
			
		</div>	
		<div class="screen-1 mg-top-2">	
			<form id="UpdateAvatarForm" name="UpdateProfilePic" method="post" action="" enctype="multipart/form-data">
				<div class="txtb formelement">
					<label>Update Avatar:</label>
					<input name="file" type="file" required="required" id="Avatar" placeholder="Update Avatar">
				</div>
				<button name="UpdateAvatar" type="submit" class="button button-small secondary-button" id="UpdateAvatar">Update Avatar</button>
			</form>	
		</div>		
	</div>			
	<script src="password-strength-checker.js"></script>
	<script src="script.js"></script>	
</body>
</html>