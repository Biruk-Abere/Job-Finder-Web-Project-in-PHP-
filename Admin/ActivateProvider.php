<?php 
include "../dbhandler.php";

 ?>

 <?php 
 
  	# code...
  	$id = $_GET['active'];
  	$sql = "UPDATE company_reg set status='confirm' where companyId ='$id'";
  	$result = mysqli_query($conn , $sql);
  	if ($result) {
  		# code...
  		echo '<script type ="text/javascript">alert("Provider Activated"); window.location = \'provider.php\';</script>';
  		exit();
  	}
  	else{
  		echo '<script type ="text/javascript">alert("Providerrovider Not Confirmed"); window.location = \'provider.php\';</script>';
  		exit();
  	}

 

  ?>