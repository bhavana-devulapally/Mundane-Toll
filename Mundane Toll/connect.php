<?php
	include('db.php');
	//include('auth_session.php');
?>
<?php

	
	session_start();
	$q=mysqli_query($con,"select id from users where username='$_SESSION[username]';");
	$row=mysqli_fetch_assoc($q);
    $_SESSION['user_id'] = $row['id'];
	
	
	//session_destroy();

?>
