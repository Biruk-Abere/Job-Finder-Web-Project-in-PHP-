<?php 
include "../dbhandler.php";
 ?>
 <?php 
  if (isset($_POST['update'])) {
  	# code...
  	$id = $_POST['NewsId'];
  	$message = $_POST['message'];
  	$status = $_POST['status'];
  	

  	$sql = "Update News set message='".$message."',status='".$status."' where NewsId=".$id."";
  	$result = mysqli_query($conn , $sql);
  	if ($result) {
  		# code...
  		echo '<script type = "text/javascript">alert("Updated Successfuly"); window.location = \'News.php\';</script>';
  		exit();
  	}
  	else{
  		echo '<script type = "text/javascript">alert(" Not Updated Successfuly"); window.location = \'News.php\';</script>';
  		exit();
  	}

  }
  else{
    echo '<script type = "text/javascript">alert(" Not Updated Successfuly"); window.location = \'user.php\';</script>';
  		exit();
  }

  ?>