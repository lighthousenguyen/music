<html>
	<head>
		<title>Login page</title>
		<link rel="stylesheet" type="text/css" href="csslogin.css">
	</head>
	<body>
		<div id="login">
			<form action="checkpass.php" method="POST">
				<p>
					<label>Username: </label>
					<input type="text" id="user" name="user">
				</p>
				<p>
					<label>Password: </label>
					<input type="password" id="pass" name="pass">
				</p>
				<p>
					<input type="submit" id="btn" value="Login">
				</p>
			</form>
		</div>
	</body>
</html>