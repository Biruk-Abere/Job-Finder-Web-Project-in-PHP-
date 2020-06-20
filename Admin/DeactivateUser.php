<?php 
include "../dbhandler.php";
 ?>
<?php 
$id = $_GET['deactive'];
$sql = "UPDATE jobfinder_reg SET status='pending' WHERE finderId='$id'";
$result = mysqli_query($conn , $sql);
if ($result) {
	# code...
	echo '<script type ="text/javascript">alert("User Deactivated"); window.location =\'finder.php\';</script>';
	exit();
}
else{
   echo '<script type ="text/javascript">alert("User Deactivated"); window.location =\'finder.php\';</script>';
   exit(); 
}
 ?>
