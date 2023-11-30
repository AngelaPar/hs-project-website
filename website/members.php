<?php
	session_start();
	include"conn.php";
?>

<?php
	// Check for a valid user_id in the Session Variable $UserID from the login page
	// else direct the user back to the login page
	if (isset($_SESSION["UserID"])) {
	
	}
	else {
		header('Location: login.php');
	}
?>
<?php 
	$folder_path = 'uploads/'; 
	$sql = $conn->query("select * from members");
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Styles/BaseStyles.css">
	<link rel="stylesheet" type="text/css" href="Styles/MembersStyles.css">
	
<title>Members | Gamecademy</title>
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
			<a href="updateprofile.php">update profile</a>	
			<a href="logout.php">log out</a>		
		</div>
	</nav>	
	<!-- NEW STYLE -->
	<div class="container">
		<div class="title">
			<h1>
				<strong>Welcome <?php echo $_SESSION['FirstName'] ?>!
				Your skill level is <?php echo $_SESSION['SkillLevel'] ?>.</strong>	
			</h1>
		</div>
		<?php
			while ($row=$sql->fetch_array()) {
		?> 		
		<div class="profile">  
			<div class="image" style="width: 75px; height: 75px; background-image: url('<?php echo $folder_path ?><?php echo $row['avatar']; ?>');"></div>
				<h2><?php echo $row['first_name'];?></h2>
				<p><?php echo $row['email'];?></p>
				<p><?php echo $row['about_me'];?></p>
		</div>
		<?php } ?>
	</div>	
	<script src="script.js"></script>
</body>
</html>