<?php 
include "../dbhandler.php";
 ?>
<?php 
$id = $_GET['deactive'];
$sql = "UPDATE company_reg SET status='pending' WHERE companyId='$id'";
$result = mysqli_query($conn , $sql);
if ($result) {
	# code...
	echo '<script type ="text/javascript">alert("Provider Deactivated"); window.location =\'provider.php\';</script>';
	exit();
}
else{
   echo '<script type ="text/javascript">alert("Provider Deactivated"); window.location =\'provider.php\';</script>';
   exit(); 
}
 ?>
