<?php
require 'config.php';
				$Id =$_POST['aadhaar'];
				$name =$_POST['fname'];
				$mc = $_POST['Mcategory'];
				$complaint = $_POST['subject'];
				$amt=10000;
				$query= "insert into complaints values('$Id','$name','$mc','$complaint')";
						$query_run = mysqli_query($con,$query); 			
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Complaint Registered") </script>';
							$cpl="select id,email  from thirdparty where thirdparty.category='$mc'";
							echo $cpl;
							$cpls = mysqli_query($con,$cpl);
							$result = mysqli_fetch_array($cpls);
							if($cpls)
							{
								
								
									include 'email.php';
							
							}
							else{
								echo 'Error';
							}
					    }
						else
						{
							echo '<script type="text/javascript"> alert("hey Error!") </script>';
						}
?>

