<?php 
  session_start();
  if (isset($_SESSION['CompanyUsername'])) {
  	# code
  }
  else{
  	echo '<script type="text/javascript">alert("Session Not Set")</script>';
  }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Welcome <?php echo $_SESSION['CompanyUsername'] ?></title>
 </head>
 <body>
 
 </body>
 </html>


 # ===========================the other method==================================
 <?php 
 	session_start()
 	if (isset($_SESSION['CompanyUsername'])): 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Welcome <?php echo $_SESSION['CompanyUsername'] ?></title>
 </head>
 <body>
 
 </body>
 </html>
 <?php 
 	endif;
 ?>

# and also ekru one thing that i wanna share , i dont know if u need it , but if u wanna count the number of records of sth.

<?php
              	  
        $sql = "SELECT * FROM sales_part WHERE sales_man_name = 'sales_man';"
        $result = mysqli_query($conn , $sql);
        $resultcheck = mysqli_num_rows($result);
            if ($result) {
                  	# code...
            if ($resultcheck>0) {
                  		# code...
             while ($row = mysqli_fetch_assoc($result)) {
             	# code...
             }
         }

     }
              	?>
        <?php echo "Total ".$resultcheck." Records"; ?> # these will tell u the number of records , or number of users , i dont know....