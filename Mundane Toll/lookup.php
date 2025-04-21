<?php 
    include("nav_bar.php");
	include("connect.php");
	$var2=$_SESSION['user_id'];
	$con=mysqli_connect('localhost','root','');
	
	if(!$con)
	{
		echo 'Not connected to server';
	}
	
	if(!mysqli_select_db($con,'expenses'))
	{
		echo 'Database not selected';
	}
	
	
	$sql_qry = "SELECT SUM(Amount) AS count FROM monthly_expenses WHERE user_id='$var2' and MONTH(create_datetime)=MONTH(now())and YEAR(create_datetime)=YEAR(now()) ORDER BY create_datetime DESC";
	
	$duration = $con->query($sql_qry);
	$record = $duration->fetch_array();
	$total = $record['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    
    <title>View Records</title>
	
<style>

.table table-bordered{
	border: 2px solid black;
}

table td {
    padding: 0.5rem;
    border: 2px solid black;
}

</style>
</head>

<body> 


<?php
					
						// MySQLi Procedural
							
	$sql_qry = "SELECT * FROM monthly_expenses WHERE user_id='$var2' and MONTH(create_datetime)=MONTH(now())AND YEAR(create_datetime)=YEAR(now()) ORDER BY create_datetime DESC";
	$result = mysqli_query($con,$sql_qry);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result);
	}else{
		$msg = "No Record found";
	}
							
	
	
?>


<br><br>
<br><br>
<form action="3.html" method="post">
	
</form>
<h1 style="padding:0px 550px; margin-bottom:2px; margin-top:20px;">Montly Expenses Look-Up</h1><br>

<h3 style="padding:0px 500px; ">Expenses Made in this Month-<?php echo date('F Y'); ?></h3><br>

	
        <div class="container">
            <div class="row" >
                <div class="col m-auto"  >
                    <div class="card mt-5" >
                    
                        <table class="table" style="border: 2px solid black;">
                            <tr>
								<td style="font-weight:bold;"> ID </td>
                                <td style="font-weight:bold;"> Type of Expense </td>
                                <td style="font-weight:bold;"> Description </td>
                                <td style="font-weight:bold;"> Amount</td>
                                <td style="font-weight:bold;"> Date/Time </td>
                            </tr>
						
						<?php
					
						// MySQLi Procedural
							
							$sql_qry = "SELECT * FROM monthly_expenses WHERE user_id='$var2' and MONTH(create_datetime)=MONTH(now())AND YEAR(create_datetime)=YEAR(now()) ORDER BY create_datetime DESC";
							$result = mysqli_query($con,$sql_qry);
							if(mysqli_num_rows($result) > 0){
							}else{
								$msg = "No Record found";
							}
							
							while($row = mysqli_fetch_array($result))
							{
							?>
							<tr>
								<td><?php echo $row['ID']?></td>
								<td><?php echo $row['Name']?></td>
								<td><?php echo $row['Email']?></td>
								<td><?php echo $row['Amount']?></td>
								<td><?php echo $row['create_datetime']?></td>
							</tr>
						<?php 
								
							}
							
						?> 
						
							<td colspan="8" style="padding:13px 360px; font-weight: bold; font-size:17px;">Total Expenses made till date   :   <?php echo $total ?></td>
						</tr>
						</table
					</div>
                </div>
            </div>
        </div>
		
		
<script type="text/javascript">
<?php include("expense_db.php"); ?>

<?php
					
						// MySQLi Procedural
							
	$sql_qry = "SELECT * FROM monthly_expenses WHERE user_id='$var2' and MONTH(create_datetime)=MONTH(now())AND YEAR(create_datetime)=YEAR(now()) ORDER BY create_datetime DESC";
	$result = mysqli_query($con,$sql_qry);
	if(mysqli_num_rows($result) > 0){
	}else{
		$msg = "No Record found";
	}
							
	$row = mysqli_fetch_array($result);
	
?>
<?php

	$sql_qry = "SELECT SUM(Amount) AS count FROM monthly_expenses WHERE user_id='$var2' and MONTH(create_datetime)=MONTH(now())and YEAR(create_datetime)=YEAR(now()) ORDER BY create_datetime DESC";
	
	$duration = $con->query($sql_qry);
	$record = $duration->fetch_array();
	$total = $record['count'];
	echo $total;
	
?>

<?php

	$sql_qry = "SELECT SUM(Amount) AS count FROM monthly_expenses WHERE user_id='$var2' and MONTH(create_datetime)=MONTH(now())and YEAR(create_datetime)=YEAR(now()) ORDER BY create_datetime DESC";
	
	$duration = $con->query($sql_qry);
	$record = $duration->fetch_array();
	$total = $record['count'];
	echo $total;
	
	?>


	function alerts1(){
		if("'.$total.'">="'.$row['threshold'].'"-5000){
			alert("You're nearing your threshold! You need to start saving up");
			alert("I am an alert box!");
			return;
		}
	}
</script>
		
</body>
</html>