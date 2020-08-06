<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>login page</title>
</head>


<body>
	
	<h3>Login Now</h3><br><br>
	<form action="login_server.php" method="post">
		<div>
			<div>
				<label for="username">Username</label>
				<input type="text" placeholder="enter username" required="" name="username"><br><br>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" placeholder="enter password" required="" name="password"><br><br>
			</div>
		</div>
							
		<button type="submit">Login</button><br><br>
		<p>
			<a href="register.php">Create a new account</a>
		</p>
	</form>
		
					


</body>

</html>