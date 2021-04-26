<!DOCTYPE html>
<html>
<head>
	<title>signUp</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	

	<div class="box">
		<h1>Sign Up</h1>
	<span>Do you already have an account? <a href="sign_in.php">Sign In</a></span>
		<form action="control.php" method="POST">

		<input type="text" name="name" placeholder="enter your name">
		<input type="email" name="email" placeholder="enter your email">
		<input type="password" name="password" placeholder="enter your password">
		<input type="password" name="confirm_password" placeholder="confirm your password">
		<button type="submit"  name="btn_signup" class="button">Aceptar</button>
		</form>
	</div>

</body>
</html>