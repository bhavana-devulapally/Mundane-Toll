<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Expense</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<style>

.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add Your Expense</h2>
                    </div>
                    <p>Please enter your expense.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Type</label>
							<select name='tpe' class="form-control" required>
								<option value="">--Select--</option>
								<option value="Electricity Bill">Electricity Bill</option>
								<option value="Electronic Gadgets/Accessories">Electronic Gadgets/Accessories</option>
								<option value="Groceries">Groceries</option>
								<option value="Newspaper Bill">Newspaper Bill</option>
								<option value="Internet">Internet</option>
								<option value="Mobile Recharge">Mobile Recharge</option>
								<option value="TV Cable Recharge">TV Cable Recharge</option>
								<option value="Rent">Rent</option>
								<option value="Wages">Wages</option>
								<option value="Shopping">Shopping</option>
								<option value="Water Bill">Water Bill</option>
								<option value="Furniture">Furniture</option>
								<option value="Stationary">Stationary</option>
								<option value="Supplies">Supplies</option>
								<option value="Other">Other</option>
							</select>
                           
                        </div>
                        <div class="form-group">
                            <label>Description</label>
							<textarea id="w3review" name="dsc" rows="4" cols="64"></textarea>
						</div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="number" name="amt" class="form-control" required>
                        </div>
						
                        <input type="submit" class="btn btn-primary"  value="Insert">
                    </form>
                </div>
            </div>        
        </div>
    </div>
	
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>













