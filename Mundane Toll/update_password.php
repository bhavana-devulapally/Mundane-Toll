
<html>

<head>
	<title>Update Password</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   
   <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
<style>

body{
	height:650px;
	background-color:white;
	
	background-color:#696969;
}

.wrapper
{
	height:530px;
	width:430px;
	background-color:#2a2b38 ;
	margin:150px auto;
	color:white;
	padding:20px 40px;
	border-radius:15px;
	background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
	background-position: bottom center;
	background-repeat: no-repeat;
    background-size: 300%;
	
	border-radius: 6px;
  left: 0;
  top: 0;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
  
}



.button {
  
  background-color: #ffeba7;
padding: 12px 22px;
  text-align: center;
  text-decoration: none;
  margin: 1px 94px;
  cursor: pointer;
  border-radius:4px;
  height: 44px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  letter-spacing: 1px;
  display: -webkit-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-align-items: center;
  -moz-align-items: center;
  -ms-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  border: none;
  background-color: #ffeba7;
  color: #102770;
  box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
}

.button:active,
.button:focus{  
  background-color: #102770;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
.button:hover{  
  background-color: #102770;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}





</style>
	
</head>
<body>
	



	
	<?php
    require('db.php');
	date_default_timezone_set("Asia/Kolkata");
    session_start();
	
    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND email='$email'";
        $result = mysqli_query($con, $query) ;
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            
            // Redirect to user dashboard page
			$sql = "UPDATE users SET password='$_POST[password]' WHERE username='$_POST[username]' AND email='$_POST[email]' ;";

			if (mysqli_query($con, $sql)) {
				header("Location: success_login.php");
			} else {
				echo "Error updating record: " . mysqli_error($con);
			}
            
        } else {
			
			header("Location: wupdate_password.php");
        }
    } else {
?>

<div class="wrapper">
		<div style="text-align:center;">
			<h1 style="text-align: center; font-size:35px; font-family:Lucida Console;">Mundane Toll</h1>
			<h1 style="text-align: center; font-size:20px;">Change Your Password</h1><br>
		</div>
		<form action="" method="post">
			<i class="fa fa-user icon"></i><label><b>  Username</b> </label>
			<input type="text" name="username" placeholder="Username" class="form-control" required><br>
			<i class="fa fa-envelope" ></i>&nbsp;<label><b>  Email</b></label>
			<input type="text" name="email" placeholder="Email" class="form-control" required><br>
			<i class='fas fa-lock' ></i>&nbsp;<label><b>  Password</b></label>
			<input type="text" name="password" placeholder="New Password" class="form-control" required><br>
			<button onclick="myFunction()"   type="submit" name="submit" class="button">Update</button><br><br>
			<p style="color:white;">
			<b>Click here to </b> <a href="login.php" style="color:#B2BEB5;"> Login </a>
		
		</form>
	</div>
<?php
    }
?>   

	


</body>
</html>