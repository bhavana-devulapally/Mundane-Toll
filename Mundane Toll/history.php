
<?php 
	include("nav_bar.php");
	include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
	
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
<br><br>
<br><br>
<br>
<h1 style="padding:0px 700px; ">History</h1><br>


<div class="dropdown">
	<form method="POST" style="padding:20px; font-weight:bold;">
        <label class="dropbtn">Month:  </label>
            <select name="month">
			
            <?php
				for ($i = 0; $i <= 12; $i++)
                {
					if($i==0){
						$month="   - - - -  ";
					}
					else{
						$month = date('F', mktime(0, 0, 0, $i, 1, 2011));
					}
						?>
						<option value="<?php echo $i; ?>"><?php echo $month; ?></option>
                    <?php
                }
			?>
            </select>
<br><br>	
<div class="dropdown">
		<label class="dropbtn">Year:  </label>
            <select  name="year" id="year1">
            <?php
				for($n=2016;$n<=2050;$n++){
					if($n==2016){
						$year="-";
					}
					else{
						$year=$n;
					}
			?>
				<option href="#" value="<?php echo $year; ?>"> <?php echo $year; ?> </option>
				<?php
				}
				?>
            </select>
        <button  type="submit" value="Get Data" name="submit">Get Data</button>
    </form>
	<?php
		include('expense_db.php');
		$month=$_POST['month'];
		$year=$_POST['year'];
	
	?>
	<h3 style="padding-left:500px; top:30px;"> Expenses made in the month: <?php echo $month."/".$year." "; ?>  </h3>
	
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
								if (isset($_POST['submit'])){
								include('expense_db.php');
								$month=$_POST['month'];
								$year=$_POST['year'];
								$var3=$_SESSION['user_id'];
								
							?>
							
							
							<?php
						
								$sql_qry = "SELECT SUM(Amount) AS count FROM monthly_expenses WHERE user_id='$var3' and month(create_datetime)='$month' and year(create_datetime)='$year'";
								$duration = $con->query($sql_qry);
								$record = $duration->fetch_array();
								$total = $record['count'];
							
									$oquery=mysqli_query($con,"select * from `monthly_expenses` where user_id='$var3' and month(create_datetime)='$month' and year(create_datetime)='$year' ORDER BY create_datetime DESC");
									if (mysqli_num_rows($oquery) <=0){
										echo "No data Found.";
									}
									else{
									while($orow=mysqli_fetch_array($oquery)){
							?>
							<tr>
								<td><?php echo $orow['ID']?></td>
								<td><?php echo $orow['Name']?></td>
								<td><?php echo $orow['Email']?></td>
								<td><?php echo $orow['Amount']?></td>
								<td><?php echo $orow['create_datetime']?></td>
							</tr>
						<?php 
									}
								}
							}
						?>
						
							<td colspan="10" style="padding:13px 400px; font-weight: bold; font-size:17px;">Total Expenses : <?php echo $total ?></td>
						</tr>
						</table
					</div>
                </div>
            </div>
        </div>
		<?php
			include('expense_db.php');
		?>
</body>
</html>