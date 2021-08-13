<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Haythem</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<header>
		<div class="head">
		    <div class="nav">
				<a href="index.php">Home</a>
				<a href="">Products</a>
				<a href="">About</a>
				<a href="">Contact</a>
		    </div>
			<div class="forms">
				<form class="login-form" action="login.inc.php" method="post">
					<input type="text" name="usermail" placeholder="Username/E-mail...">
					<input type="password" name="pass" placeholder="Password...">
					<button type="submit">Login</button>
				</form>
				<form action="signup.php" class="signup-btn">
					<button type="submit">SignUp</button>
				</form>
				<form class="logout-btn">
					<button type="submit">Logout</button>
				</form>
			</div>
		</div>
	</header>