<?php

	session_start();
	session_destroy();
	unset($_SESSION['username']);
	echo "<script>alert('Successfully Log out')</script>";
	echo "<script>window.location.href = 'http://localhost/bookclub/index.php'</script>";

?>