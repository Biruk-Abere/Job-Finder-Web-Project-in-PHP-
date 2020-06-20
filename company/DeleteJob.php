<?php 
include "../dbhandler.php";
 ?>
 <?php 
$id = $_GET['delete'];
$sql = "DELETE FROM postjob where jobId='$id'";
$result = mysqli_query($conn,$sql);
if ($result) {
	# code...
	echo '<script type="text/javascript">alert("Job Deleted"); window.location=\'post.php\';</script>';
	exit();
}
else{
	echo '<script type="text/javascript">alert("Job Not Deleted"); window.location=\'post.php\';</script>';
	exit();
}

  ?>