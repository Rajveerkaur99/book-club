<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>register page</title>
</head>


<body>
	
	
			<h3>Register Now</h3><br><br>
				<form action="reg_server.php" method="post" enctype="multipart/form-data">
						<div>
							<div>
								<label for="fname">First Name :</label>
								<input type="text" placeholder="enter your first name" required="" name="fname"><br><br>
								</div>
								<div>
									<label for="lname">Last Name :</label>
									<input type="text" placeholder="enter your last name" required="" name="lname"><br><br>
								</div>
							</div>
							<div>
								<div>
									<label for="username">Username :</label>
									<input type="text" placeholder="enter yor username" required="" name="username"><br><br>
								</div>
								<div>
									<label for="img">Upload Profile Picture :</label>
									<input type="file" required="" name="img"><br><br>
									</div>
							</div>
							<div>
								<div>
									<label for="bookreview">Book Review :</label>
									<textarea name="review" placeholder="Write book review..." style="height:100px"></textarea><br><br>
								</div>
							<div>
								<div>
									<label for="password">Password :</label>
									<input type="Password" placeholder="enter yor password" required="" name="pw"><br><br>
								</div>
							</div>
							<button type="submit" name="reg_btn">Register</button><br><br>
							<p>
									<a href="login.php">Already have an account ?</a>
								</p>
						</form>
		
					


</body>

</html>