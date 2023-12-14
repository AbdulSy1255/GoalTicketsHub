<?php
session_start();
$temp = "";

if(isset($_POST['userName']) && isset ($_POST['pWord']) && $_POST['userName'] != ""&& $_POST['pWord'] != "")
{
		if($_POST['userName'] == "admin" && $_POST['pWord'] =="Password")
		{
			$_SESSION['loggedin'] = 1;
			$_SESSION['userName'] = "Admin";
			header("Location: reports.php");
		}
		else
		{
			$temp = "<p style = 'color:red'>Username or Password not recognised</p>";
		}
}
else
{
		$temp = "<p>Please enter a username and password</p>";
}
?> 

<!Doctype html>
<html>
	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width">
		<meta name="description" content="Homepage for The Reel Deal">
		<meta name="author" content="Curtis Wyatt">
		<title>Goal Tickets Hub About Us</title>
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding">
					<h1>Goal Tickets Hub</h1>
				</div>
				<nav>
					<ul>
						<li class="current"><a href="index.html">Home</a></li>
						<li class="current"><a href="browse.php">Browse</a></li>
						<li class="current"><a href="about.html">About Us</a></li>
						<li class="current"><a href="contact.html">Contact Us</a></li>
						<li class="current"><a href="login.php">Login</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="container">
			<h2><?php echo $temp;?></h2>
			<form action = "login.php" method = "POST">
				<p><label>Username: <input type = "text" name = "userName"/>  </label> </p>
				<p><label>Password: <input type = "text" name = "pWord"/>     </label> </p>
				<input type = "submit" value = "Submit" />
			</form>
		</div>
	
<footer>
	<p>Goal Tickets Hub,Copyright &copy; 2022</p>
		</footer>
	</body>
</html>