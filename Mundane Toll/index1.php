<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mundane Toll</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

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
/*****/
/* General CSS 100D4A*  background: #08072C;/
/*****/
body {
    color: #797979;
    background-image:  url('images/todo.png');
	opacity:0.9;
	
    font-family: 'Open Sans', sans-serif;
}

h1,h2, h3, h4,h5, h6 {
    color: black;
}

a {
    color: #454545;
    transition: .3s;
}

a:hover,
a:active,
a:focus {
    color: #F7CAC9;
    outline: none;
    text-decoration: none;
}

.btn:focus,
.form-control:focus {
    box-shadow: none;
}

.container-fluid {
    max-width: 1366px;
}

.back-to-top {
    position: fixed;
    display: none;
    background: #F7CAC9;
    width: 44px;
    height: 44px;
    text-align: center;
    line-height: 1;
    font-size: 22px;
    right: 15px;
    bottom: 15px;
    transition: background 0.5s;
    z-index: 9;
}

.back-to-top:hover {
    background: #343148;
}

.back-to-top:hover i {
    color: #F7CAC9;
}

.back-to-top i {
    color: #343148;
    padding-top: 10px;
}


/****/
/** 0B3C5D Top Bar CSS #219EBC***/
/****/

.top-bar {
	position:relative;
	transition: .5s;
    z-index: 999;
    
}
.top-bar .text {
     
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    height: 35px;
    padding: 0 10px;
    text-align: center;
    border-left: 1px solid rgba(255, 255, 255, .15);
}

.top-bar .text h2 {
    color: #eeeeee;
    font-weight: 400;
    font-size: 13px;
    letter-spacing: 1px;
    margin: 0;
}

@media (min-width: 992px) {
    .top-bar {
		position: fixed;
        padding: 0 60px;
		background: #f0f8ff;
		height: 35px;
		width:100%;
		z-index: 9;
	}
}

/****/
/** Nav Bar CSS #f0f8ff***/
/****/

navbar {
    position: relative;
    transition: .5s;
    z-index: 999;
}


.navbar .navbar-brand {
    margin: 0;
    color: #ffffff;
    font-size: 45px;
    line-height: 0px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: .5s;
    
}

.navbar-dark .navbar-nav .nav-link,
.navbar-dark .navbar-nav .nav-link:focus,
.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    padding: 10px 10px 8px 10px;
    color: #fffff;
}


.navbar .dropdown-menu {
    margin-top:0;
    border: 0;
    border-radius: 0;
    background:#ffffff;
}

@media (min-width: 992px) {
    .navbar {
        position: fixed;
        width: 100%;
        top: 35px;
        padding: 20px 60px;
        background: #f0f8ff!important;
	
        z-index: 9;
    }
    
    .navbar a.nav-link {
        padding: 8px 15px;
        font-size: 23px;
        letter-spacing: 0px;
        text-transform: uppercase;
    }
}


/*****/
/** #08072C Hero CSS  #87CEFA***/
/*****/
.hero {
    position:relative;
    width: 100%;
    margin-bottom: 45px;
    padding: 90px 0;
    background:  #f0f8ff;
    overflow: hidden;
	
	
}

.hero .container-fluid {
    padding: 0;
}

.hero .hero-text {
    position: relative;
    padding-left: 2px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
}

.hero .hero-text h1 {
    color: #343148;
    font-size: 45px;
    margin-top:38px;
    font-weight: 700;
    margin-bottom: 20px;
}

.hero .hero-text p {
    color: #343148;
    font-size: 18px;
    margin-bottom: 25px;
}

@media (max-width: 991.98px) {
    .hero .hero-text {
        padding: 0 15px;
    }
    
    .hero .hero-text h1 {
        font-size: 35px;
    }
    
    .hero .hero-text p {
        font-size: 16px;
    }
    
    .hero .hero-text .btn {
        padding: 12px 30px;
        letter-spacing: 1px;
    }
}

@media (max-width: 767.98px) {
    .hero .hero-text h1 {
        font-size: 30px;
        font-weight: 600;
    }
    
    .hero .hero-text p {
        font-size: 14px;
    }
    
    .hero .hero-text .btn {
        padding: 10px 15px;
        font-weight: 400;
        letter-spacing: 1px;
    }
}

@media (max-width: 575.98px) {
    .hero .hero-text h1 {
        font-size: 25px;
        font-weight: 600;
    }
    
    .hero .hero-text p {
        font-size: 14px;
    }
    
    .hero .hero-text .btn {
        padding: 8px 10px;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 0;
    }
    
    .hero .hero-text .top_left .h3{
	font-size: 16px;
	
   }
 /*****/
/* SlideShow CSS */
/*****/

.mySlides {display:none;}
</style>
</head>
	<body> 
       <!-- Top Bar Start -->
		<div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="top-bar-left">
                            
                            <div class="text" >
                               <h2 style="color:black;"><b>Hey, <?php echo $_SESSION['username']; ?>! Welcome to our website.</b></h2>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
	
        <div class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
            <div class="container-fluid">
                <a href="index1.php" class="navbar-brand" style="color:Cadetblue;">MUNDANE TOLL</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index1.php" class="nav-item nav-link " style="color:black;"><b>Home</b></a>
						<a href="lookup.php" class="nav-item nav-link " style="color:black;"><b>LookUp</b></a>
                        <a href="https://calendar.google.com/calendar/u/0/r?tab=kc&pli=1" class="nav-item nav-link " style="color:black;"><b>+Add Remainder</b></a>
						<a href="history.php" class="nav-item nav-link " style="color:black;"><b>History</b></a>
						<a href="profile.php" class="nav-item nav-link " style="color:black;"><b>My Account</b></a>
                    </div>
                </div>
            </div>
        </div>
		<!-- Nav Bar End -->
		
		<!-- Hero Start -->
        <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-text">
                            <h1 style="color:black; "><b>Knowing the Unknowns</b></h1>
                            <br>
			<div class="top_left">
	<h3><b><button onclick="window.location.href='form.php';"<span style="background-color:Cadetblue; color:white; font-size: 19px;  padding :17px 22px; cursor: pointer;">+Add your Expense here!</b></button></h3>
	</div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
		
		<!--<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script> 
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
		
		
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
  
}
</script>
</body>
</html>