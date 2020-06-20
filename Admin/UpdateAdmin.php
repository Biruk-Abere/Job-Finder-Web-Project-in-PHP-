<?php 
include "../dbhandler.php";
 ?>
 <?php 
  if (isset($_POST['update'])) {
  	# code...
  	$id = $_POST['adminid'];
  	$adminname = $_POST['username'];
  	$adminemail = $_POST['email'];
  	$adminpassword = $_POST['password'];

  	$sql = "Update admin_reg set adminName='".$adminname."',adminEmail='".$adminemail."' ,adminPassword='".$adminpassword."' where adminId=".$id."";
  	$result = mysqli_query($conn , $sql);
  	if ($result) {
  		# code...
  		echo '<script type = "text/javascript">alert("Updated Successfuly"); window.location = \'user.php\';</script>';
  		exit();
  	}
  	else{
  		echo '<script type = "text/javascript">alert(" Not Updated Successfuly"); window.location = \'user.php\';</script>';
  		exit();
  	}

  }
  else{
    echo '<script type = "text/javascript">alert(" Not Updated Successfuly"); window.location = \'user.php\';</script>';
  		exit();
  }

  ?>