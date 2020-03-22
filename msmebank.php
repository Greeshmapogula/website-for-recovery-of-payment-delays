<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=number] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>MSME BANK</h3>

<div class="container">
  <form action="msmebank.php" method="post">
  
    <label for="gstn">GST Number of Buyyer</label>
    <input type="number" id="gstn" name="gstn" maxlength="12" placeholder="0000 0000 0000" required><br>
	
	 <label for="accn">Bank Account number of Buyyer</label>
    <input type="number" id="accn" name="accn" maxlength="16" placeholder="0000 0000 0000" required><br>
	
	 <label for="ifsc">IFSC CODE</label>
    <input type="text" id="ifsc" name="ifsc" maxlength="16" placeholder="0000 0000 0000" required><br>
	
	 <label for="cnum">Contact number of Buyyer</label>
    <input type="text" id="cnum" name="cnum" placeholder="phone" required
	
	 <label for="amount">Amount to be paid</label>
    <input type="number" id="amt" name="amt" placeholder="Surity Amount" required>
	
	 <label for="saadhaar">UA number of Suplyer</label>
    <input type="number" id="saadhaar" name="saadhaar" maxlength="12" placeholder="0000 0000 0000" required><br>
	
    <label for="dura">Payment Date</label>
     <input type="date" name="dura" id="dura" required>

    <input  name="submit" type="submit" id="submit" value="Submit">
  </form>
<?php
if(isset($_POST['submit']))
			{
				
				$gstn = $_POST['gstn'];
				$acnt = $_POST['accn'];
				$ifsc = $_POST['ifsc'];
				$phone = $_POST['cnum'];
				$amt = $_POST['amt'];
				$uas =$_POST['saadhaar'];
				$dur = $_POST['dura'];
				$id=uniqid(mt_rand(),true);
				
						$query= "insert into agreement values('$gstn','$acnt','$ifsc','$phone','$amt','$uas','$dur','$id')";
						$query_run = mysqli_query($con,$query);
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Registration Is Done\nAmount is transfared to PM account") </script>';
							
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
			}		
?>
		</div>
</body>
</html>

