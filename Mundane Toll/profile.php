
<?php
include("db.php");
include("nav_bar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	

        
<style>
.wrapper
{
	width:500px;
	margin:0 auto;
	color: white;
}
		
#customers {
	font-family: Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 10%;
	margin-left:360px
			
}

#customers td, #customers th {
	border: 1px solid #ddd;
	padding: 10px 50px;
			
}

#customers tr:nth-child(even){background-color: white;}

#customers tr:hover {background-color: #ddd;}

#customers th {
	padding-top: 12px;
	padding-bottom: 12px;
	text-align: center;
	background-color: #04AA6D;
	color: white;
}
		
		
.table table-bordered{
	border: 2px solid black;
}

table td {
    padding: 0.5rem;
    border: 2px solid black;
}

</style>
</head>
<body >

<div class="container">
		<form action="login.php" method="post">
			<button style="background:Aliceblue; margin-left:1200px; margin-top:120px; padding:10px 10px;" name="submit1">LogOut</button>
		</form>
		<div>
			<?php
				$q=mysqli_query($con,"select * from users where username='$_SESSION[username]';");
			?>
			
			
		
			<?php
				$row=mysqli_fetch_assoc($q);
				echo "<div style='text-align: center; border-radius: 50%;'>
					<img src='https://static.vecteezy.com/system/resources/thumbnails/002/318/271/small/user-profile-icon-free-vector.jpg' height=200 width=200></div>";
			?>
			<div style="text-align: center; font-size: 30px;"><b>Welcome, </b>
			<br>
				<?php echo $_SESSION['username']; ?>
			
			</div>
			<br>
			<?php
				echo "<table id='customers'>";
				
					echo "<tr>";
						echo "<td>";
							echo "<b> User-ID: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['id'];
						echo "</td>";
					echo "</tr>";
				
					echo "<tr>";
						echo "<td>";
							echo "<b> Username: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['username'];
						echo "</td>";
					echo "</tr>";
				
					echo "<tr>";
						echo "<td>";
							echo "<b> Email: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['email'];
						echo "</td>";
					echo "</tr>";
					
					echo "<tr>";
						echo "<td>";
							echo "<b> Gender: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['gender'];
						echo "</td>";
					echo "</tr>";
					
					echo "<tr>";
						echo "<td>";
							echo "<b> Phone Number: </b>";
						echo "</td>";
						echo "<td>";
							echo $row['phno'];
						echo "</td>";
					echo "</tr>";
				
				echo "</table>";
			
			
			?>
		</div>
	</div>


		

</body>
</html>