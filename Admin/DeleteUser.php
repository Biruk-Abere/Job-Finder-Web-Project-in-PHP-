<?php 
include "../dbhandler.php";
 ?>
 <?php 
$id = $_GET['delete'];
$sql = "DELETE FROM jobfinder_reg WHERE finderId ='$id'";
$result = mysqli_query($conn , $sql);
if ($result) {
	# code...
	echo '<script type="text/javascript">alert("User Deleted Successfuly"); window.location = \'finder.php\';</script>';
	exit();
}

  ?>