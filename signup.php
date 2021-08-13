<?php
include 'header.php';
?>

<main>
	<div class="intro">
		<h2>Sign Up</h2>
		<p>please fill this form to create an account.</p>
	</div>
	<form class="signup-form" action="includes/signup.inc.php" method="post"><br>
		<input type="text" name="name" placeholder="Full name"><br>
		<input type="text" name="username" placeholder="Username"><br>
		<input type="text" name="mail" placeholder="E-mail"><br>
		<input type="password" name="pass" placeholder="Password"><br>
		<input type="password" name="confirmpass" placeholder="Confirm password"><br>
		<button type="submit" name="submit">SignUp</button>
	</form>
</main>

<?php
include 'footer.php';
?>