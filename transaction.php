<?php
require 'config.php';
?>
<!DOCTYPE html>
<title>transactions</title>
<body bgcolor="#636e72">
<div align="center" class="box-body table-responsive no-padding">
     <table bgcolor="#dfe6e9" border="1" cellspacing="2" cellpadding="2" class="table" >
          <tr>
              <th>GST NUMBER</th>
              <th>UDYOG AADHAAR</th>
              <th>TRANSACTION ID</th>
          </tr>
          <tr>
              <?php
					$sql = " SELECT gstn,uab,uniqid from agreement";
					$result = mysqli_query($con,$sql);
                   If($result)
                   {
                     while($row=mysqli_fetch_array($result))
                     {  
				 ?>
				 <tr>
                  <td><?php echo $row['gstn']; ?></td> 
                  <td><?php echo $row['uab']; ?></td> 
                  <td><?php echo $row['uniqid']; ?></td> 
				  </tr>
                <?php

                }
                }
                 ?>
              </tr>
       </table>
    </div>
	</body>
	</html>