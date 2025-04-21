<!DOCTYPE html>    
<html>    
<head> 
    <meta charset="utf-8"/>  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>SignUp</title> 
      
     
</head>
<style>
body  
{  
    margin: 0;  
    padding: 0;   
    font-family: 'Arial';  
} 

.reg_img
{
	height:820px;
	margin-top:0px;
	background-color:#696969;
}

.box2
{
	position:relative;
	height:665px;
	width:450px;
	background-color:#2a2b38 ;
	margin:70px auto;
	color:white;
	padding:12px;
	border-radius:15px;
	background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
	background-position: bottom center;
	background-repeat: no-repeat;
    background-size: 300%;
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



input[type=text],input[type=password],input[type=email],input[type=tel] {
  height: 25px;
  width: 100%;
  padding: 18px 15px;
  margin: 8px 2px;
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



</style>    
<body> 

<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $phno    = stripslashes($_REQUEST['phno']);
        $phno   = mysqli_real_escape_string($con, $phno);
        $gender    = stripslashes($_REQUEST['gender']);
        $gender  = mysqli_real_escape_string($con, $gender);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email,phno,gender, create_datetime)
                     VALUES ('$username', '$password','$email', '$phno','$gender','$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to<a href='login.php'>. </a> Login</p>
                  </div>";
				  header("Location: succ_reg.php");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <section>
	<div class="reg_img">
		<br> <br><br>
		<div class="box2">
			<h1 style="text-align:center; font-size:35px;font-family:Lucida Console; color:white;">Mundane Toll</h1>
			<h1 style="text-align: center;font-size:25px; color:white;">Registration Form</h1><br>
		  <form name="registration" method="post">
		  
			<div class="login">
				<i style="color:white;" class="fa fa-user icon" ></i>&nbsp;<label style="color:white"><b>  Username</b> </label>
				<input type="text" name="username" placeholder="Username" required><br><br>
				
				<i style="color:white;" class="fa fa-envelope" ></i>&nbsp;<label style="color:white;"><b>  Email</b></label>
				<input type="email" name="email" placeholder="Email" required><br><br>
				<i style="color:#B2BEB5;" class='fas fa-lock' ></i>&nbsp;<label style="color:#B2BEB5;"><b>  Password</b></label>
				<input type="password" name="password" placeholder="Password" required><br><br>
				<i style="color:white;" class="fa fa-phone" ></i>&nbsp;<label style="color:white;"><b>  Phone Number</b></label>
				<input type="tel" name="phno" placeholder="PhoneNumber" required><br><br>
				<label style="color:white;"><b>Gender: </b></label>&nbsp;
				<i style="color:white;" class="fa fa-male" ></i><input  type="radio" name="gender" value="male" required><b style="color:white;">Male</b>&nbsp;&nbsp;&nbsp;
				<i style="color:white;" class="fa fa-female" ></i><input  type="radio" name="gender" value="female"><b style="color:white;">  Female</b>
				<br><br><br>
				<button type="submit" class="button" href="index1.php"><b>Register</b></button>
			</div>
		  </form>
		  
		  <p style="style=color:white; padding-left:215px; font-size:16px; margin-bottom:300px;">
			<b>Already Logged in?  </b><a style="color:white; text-decoration: none;" href="login.php"><b>Login</b></a>
		  </p>
		</div>
	</div>
</section>

    
<?php
    }
?>
</body>    
</html>