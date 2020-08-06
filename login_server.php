<?php

 	session_start();

 	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "bookclub";

	$con = new mysqli($server,$user,$password,$database);

	if($con ->connect_error)
	 die($con->connect_error);

	if(isset($_POST))
	{
		//echo "<pre>";print_r($_POST);//exit;

		$username = $_POST['username'];
		$pass = $_POST['password'];
		$pass = md5($pass);

		$sql = "SELECT * FROM member WHERE user_name = '".$username."' AND password = '".$pass."'";
		//echo $sql;
		$result = $con -> query($sql);
		if($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			echo "<script>alert('Successfully Login')</script>";
			echo "<script>window.location.href = 'http://localhost/bookclub/afterlogin.php'</script>";
		}
		else
		{
			echo "<script>alert('Invalid email and password')</script>";
			echo "<script>window.location.href = 'http://localhost/bookclub/login.php'</script>";
		}
	}

?>