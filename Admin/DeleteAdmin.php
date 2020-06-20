<?php 
include "../dbhandler.php";
 ?>
 <?php 

	# code...
	$id = $_GET['delete'];
	$sql = "DELETE  FROM admin_reg WHERE adminID ='$id'";
	$result = mysqli_query($conn , $sql);
	if ($result) {
		# code...
	echo '<script type="text/javascript">alert("User Deleted Succesfully");window.location=\'User.php\';</script>';
	exit();
	}




  ?>