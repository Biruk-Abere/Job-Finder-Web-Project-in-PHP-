<?php 
include "../dbhandler.php";

 ?>
 <?php 
if (isset($_POST['update'])) {
	# code...
	$id = $_POST['cid'];
	$Pname = $_POST['username'];
	$email = $_POST['email'];
	$Cname = $_POST['companyname'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$mobile = $_POST['mobile'];
	
	// $pic = $_FILES["profile"]["name"];
	// $temp = $_FILES["profile"]["tmp_name"];
	// $type = $_FILES["profile"]["type"];

	// $path = "company/images/".$pic;
	// if ($type=="application/pdf"||$type=="application/x-zip-compressed") {
	// 	# code...
	// 	echo '<script>alert("this type of file does not supported !");window.location=\'EditProfile.php\';</script>'; 
 //        exit();
       
	// }
   
	$sql = "update company_reg set companyName ='".$Pname."' ,companyEmail='".$email."', CompanyRealName='".$Cname."' , Country ='".$country."' , City='".$city."',Mobile ='".$mobile."' where companyId ='".$id."'";
	$result = mysqli_query($conn , $sql);
	if ($result) {
		# code...
		// move_uploaded_file($temp, $path);
		echo '<script>alert("Successfully Updated!");window.location =\'profile.php\';</script>'; 
        exit();

	}

}

  ?>