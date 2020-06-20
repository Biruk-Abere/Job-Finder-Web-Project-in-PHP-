<?php 
include "../dbhandler.php";
 ?>
 <?php 
$id = $_GET['delete'];
$sql = "DELETE FROM company_reg WHERE companyId ='$id'";
$result = mysqli_query($conn , $sql);
if ($result) {
	# code...
	echo '<script type="text/javascript">alert("Provider Deleted Successfuly"); window.location = \'provider.php\';</script>';
	exit();
}

  ?>