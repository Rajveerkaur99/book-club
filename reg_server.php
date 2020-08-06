<?php
	session_start();
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "bookclub";
	$_SESSION['success'] = "";

	$con = new mysqli($server,$user,$password,$database);

	if($con ->connect_error)
	 die($con->connect_error);

	if(isset($_POST))
	
	$fname = addslashes(strip_tags($_POST['fname']));
	$lname = addslashes(strip_tags($_POST['lname']));
	$username = addslashes(strip_tags($_POST['username']));
	$file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
	$review = addslashes(strip_tags($_POST['review']));
	$password = strip_tags($_POST['pw']);
	$password = md5($password);
	
		$sql = "INSERT INTO member (fname, lname, user_name, profile_img, bookreview, password) 
					  VALUES('$fname', '$lname', '$username', '$file', '$review', '$password')";

			if($con->query($sql))
			{
			echo "<script>alert('Successfully Signup')</script>";
			echo "<script>window.location.href = 'http://localhost/bookclub/afterlogin.php'</script>";
		}

	
	
	


?>