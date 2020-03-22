 <?php
		require 'config.php';
		$sql = " SELECT * from agreement";
		$result = mysqli_query($con,$sql);
		
		$dt=date('Y-m-d');
        If($result)
        {
            while($row=mysqli_fetch_array($result))
            {  
				if($row['dura']==$dt)
				 {
					 echo "Auto-debit process";
				 }
            }
        }
		else{
			echo 'Error';
		}
             