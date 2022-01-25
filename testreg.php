<!DOCTYPE html>
<html>
	<head>
		<title> Sign Up </title>
	</head>
<body>
	<form name="register" action="regsave.php" method="POST">

	<p>SIGN UP HERE </p>
	Username
	<input type = "text" id ="username" name = "username" placeholder="Enter Username" required/> <br/>
	Password
	<input type = "password" id="password" name = "password" placeholder="Enter password" required/> <br/>
	Email
	<input type="email" id="email" name="email" placeholder="Enter E-mail" required/> <br/>
	<br/>
	<input type="submit"value="SIGNUP" id="submit" name="signup" />
	</form>
	<br />
	<a href = "index.php">Back</a> 
</body>

</html>