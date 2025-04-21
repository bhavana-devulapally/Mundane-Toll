<!DOCTYPE html>    
<html>    
<head>   
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Login Form</title>    
     
</head>
<style>
body  
{  
    margin: 0;  
    padding: 0;   
    font-family: 'Arial';  

}  
  
.log_img
{

	height:757px;
	margin-top:0px;
	
	background-color:#696969;
	
}

.box1
{
	height:500px;
	width:450px;
	background-color:#2a2b38 ;
	margin:70px auto;
	color:white;
	padding:20px;
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
form .login
{
	margin: auto 75px;
	color:black;
	
	
}

input
{
	height: 25px;
	width: 300px; 
	
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





input {
  width: 100%;
  padding: 21px 15px;
  margin: 8px .5px;
  display: inline-block;
  border-radius: 4px;
  box-sizing: border-box;
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  border: 1.5px solid black;
  color:black;
  
}
input:focus {
	
  
  box-shadow: 0 0 3px rgb(0, 150, 255);
  
  border: 2px solid rgb(0, 150, 255);
}




</style>    
<body>    
	
    <?php
    require('db.php');
	date_default_timezone_set("Asia/Kolkata");
    session_start();
	
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index1.php");
        } else {
			
			
                  
			header("Location: ilogin.php");
        }
    } else {
?>
<section>
	<div class="log_img">
		<br> <br><br>
		<h3 style="color:white; padding-left:590px;">Incorrect Username/Password. Try Again. </h3>
		<div class="box1">
			<h1 style="text-align:center; font-size:35px;font-family:Lucida Console; color:white;">Mundane Toll</h1>
			<h1 style="text-align: center;font-size:27px; color:#B2BEB5;">Login</h1>
		  <form name="login" method="post" action="">
		  
			<div class="login">
				
			
			
				<i class="fa fa-user icon"  style="color:white;"></i><label><b style="color:#B2BEB5;">  Username</b> </label>
				<input  type="text" name="username" placeholder="Username" required><br><br>
				
				<i style="color:white;" class='fas fa-lock'></i><label style="color:white;"><b>  Password </b></label>
				<input type="password" name="password" placeholder="Password" required>
				<a style="color:white; font-size:14px; margin-left:250px; bottom:100px; text-decoration: none;" href="update_password.php"><b>Forgot?</b></a><br><br>
				
				
				<button class="button" name="btn-save">Login</button><br><br>
			</div>
			
		
		  </form>
		  
		  <p style="color:white; padding-left:70px; ">
			<b>New to our website? </b><a style="color:white; text-decoration: none;" href="registration.php"><b>Sign Up</b></a>
		  </p>
		</div>
	</div>
</section>

<?php
    }
?>   
</body>    
</html>



