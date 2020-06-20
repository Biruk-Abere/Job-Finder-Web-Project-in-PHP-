<?php 
include "../dbhandler.php";

 ?>

 <?php 
 
  	# code...
  	$id = $_GET['active'];
  	$sql = "UPDATE jobfinder_reg set status='confirm' where finderID ='$id'";
  	$result = mysqli_query($conn , $sql);
  	if ($result) {
  		# code...
  		echo '<script type ="text/javascript">alert("User Activated"); window.location = \'finder.php\';</script>';
  		exit();
  	}
  	else{
  		echo '<script type ="text/javascript">alert("User Not Confirmed"); window.location = \'finder.php\';</script>';
  		exit();
  	}

 

  ?>