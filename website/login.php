<?php 
	session_start();
	include "conn.php";
?>

<?php
	// test whether the LogIn button on this form has been hit
	if (isset($_POST["LogIn"])) {

	// assign variables to the email and password values entered on the form
		$LoginEmail = $_POST["Email"];
		$LoginPassword = $_POST["Password"];
	
	// look for a matching record in the members table
	// and return the records as an array
		$result = $conn->query("select * from members 
			where email = '$LoginEmail' and password = '$LoginPassword'");
		$row = $result->fetch_array();
		
	// !!! personally modified to fix invalid value(null) error	
	// assign the email, password, and user_id from the array to variables
		$Email = isset($row['email']) ? $row['email'] : null;
		$Password = isset($row['password']) ? $row['password'] : null;
		$id = isset($row['user_id']) ? $row['user_id'] : null;
		
	// assign a session variable to each field we want to reuse in this session
		$_SESSION["UserID"] = isset($row['user_id']) ? $row['user_id'] : null;
		$_SESSION["FirstName"] = isset($row['first_name']) ? $row['first_name']: null;
		$_SESSION["LastName"] = isset($row['last_name']) ? $row['last_name'] : null;
		$_SESSION["MembersName"] = isset($row['first_name']) ? $row['first_name'] : null;
		$_SESSION["SkillLevel"] = isset($row['skill_level']) ? $row['skill_level'] : null;
		$_SESSION["Email"] = isset($row['email']) ? $row['email'] : null;
		$_SESSION["AboutMe"] = isset($row['about_me']) ? $row['about_me'] : null;
		$_SESSION["Password"] = isset($row['password']) ? $row['password'] : null;
		$_SESSION["Avatar"] = isset($row['avatar']) ? $row['avatar'] : null;
	// checking the values entered on the login form against the values in the database 
	// if they match direct the user to the members page, else generate an error
		if ($LoginEmail == $Email && $LoginPassword == $Password) {
?>
			<script>window.location = "members.php?id=<?php echo $id;?>";</script>
<?php 
		} else {
?>			
			<script>alert("Username or Password is Incorrect");</script>

<?php
		}	
	}
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Styles/BaseStyles.css">
	<link rel="stylesheet" type="text/css" href="Styles/FormStyles.css">
<title>Log In</title> 
</head>
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
      <a href="registration.php">register</a> 
    </div>
  </nav>  
	<div class="container">
		<div class="screen-1">
			<div class="logocontainer">
				<img src="images/logo.png"/>
			</div>
			<form id="LoginForm" name="LoginForm" method="post" action="">
				<div class="formelement">
					<label for="email">Email Address</label>
					<div class="sec-2">
						<input id="email" required="required" type="email" name="Email" placeholder="username@gmail.com" style="text-transform:initial"/>
					</div>
				</div>
				<div class="formelement">
					<label for="password">Password</label>
					<div class="sec-2">
						<input id="password" required="required" class="pas" type="password" name="Password" placeholder="· · · · · · · · · · · ·"/>
						<ion-icon class="show-hide" name="eye-outline"></ion-icon>
					</div>
				</div>
				<button name="LogIn" type="submit" class="button button-small primary-button">Login</button>
			</form>
			<div class="footer"><span><a href="registration.php">Sign up</a></span><span><a href="#">Forgot Password?</a></span></div>
		</div>	
	</div>
	<script src="script.js"></script>
</body>
</html>