<?php 
include "../dbhandler.php";
 ?>
 <?php 
$id = $_GET['delete'];
$sql = "DELETE FROM News WHERE NewsId ='$id'";
$result = mysqli_query($conn , $sql);
if ($result) {
	# code...
	echo '<script type="text/javascript">alert("Message Deleted"); window.location=\'News.php\';</script>';
	exit();
}
else{
	echo '<script type="text/javascript">alert("Message Not Deleted"); window.location=\'News.php\';</script>';
	exit();
}

  ?>