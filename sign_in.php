<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="box">
		<h1>Sign In</h1>
		<span>Don't have an account yet? <a href="sign_up.php">Sign Up</a></span>
	<form action="sign_in.php" method="POST">
		<input type="email" name="email" placeholder="enter your email">
		<input type="password" name="password" placeholder="enter your password">
		<input class="button" type="submit" value="Sign In">
	</form>
	</div>
</body>
</html>