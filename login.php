<?php 
include "dbhandler.php";
 ?>
 <?php 
  if (isset($_POST['login'])) {
  	# code...
  	$username =$_POST['uname'];
  	$password = $_POST['upass'];
  	$usertype = $_POST['usertype'];

  	if ($usertype=="JobProvider") {
  		# code...
  			$sql2 = "SELECT * FROM company_reg WHERE companyName = '$username' AND status ='confirm'";
  		$result2 = mysqli_query($conn , $sql2);
  		$resultchek2 = mysqli_num_rows($result2);
  		if ($result2) {
  			# code...
  			if ($resultchek2>0) {
  				# code...
  				while ($rows = mysqli_fetch_assoc($result2)) {
  					# code...
  					$password_verify= password_verify($password , $rows['companyPassword']);
  					if ($password_verify==false) {
  						# code...
  						echo '<script type="text/javascript">alert("Password Incorrect"); window.location = \'loginForm.php\';</script>';
  				        exit();
  					}
  					else if ($password_verify==true) {
  						# code...
  						
  					  $Cid = $rows['companyId'];
              $cname=$rows['CompanyRealName'];
  					
  					session_start();
  					$_SESSION['CompanyUsername'] =$username;
  					$_SESSION['companyId'] = $Cid;
            $_SESSION['name'] = $cname;
  					
  					echo '<script type="text/javascript">alert("Company Loged In"); window.location =\'Company/index.php\';</script>';
  					
                        exit();

  					}
  					else{
  						echo '<script type="text/javascript">alert("Something Happens"); window.location = \'loginForm.php\';</script>';
  						exit();
  					}
  					

  				}
  			}
  			else{
  				echo '<script type="text/javascript">alert("Incorrect Provider Name or Password"); window.location = \'loginForm.php\';</script>';
  				exit();
  			}
  		}

  	}
  	elseif($usertype=="Adminstrator") {
  		# code...
  		$sql = "SELECT * FROM admin_reg WHERE adminName = '$username' AND adminPassword =  '$password' ";
  			$result = mysqli_query($conn,$sql);
  			$resultcheck = mysqli_num_rows($result);
  			if ($result) {
  				# code...
  				if ($resultcheck>0) {
  					# code...
  					while ($rows = mysqli_fetch_assoc($result)) {
  						# code...
  						
  						$id = $rows['adminId'];
  						session_start();
  						$_SESSION['AdminName']=$username;
  						$_SESSION['adminid']=$id;
  						

  						echo '<script type="text/javascript">alert("Admin Loged In"); window.location = \'Admin/index.php\';</script>';
  						// header("Location: Admin/index.php"); // incase it did'nt goes
  						exit();
  					}
  					
  					}
  					else{
                        echo '<script type="text/javascript">alert("Incorrect Admin Name or Password "); window.location = \'loginForm.php\';</script>';
                        exit();
  				}
  			}
  		
  	}
  	elseif($usertype=="JobFinder"){
      $sql="SELECT * FROM jobfinder_reg WHERE finderName = '$username' AND status ='confirm'";
            $result = mysqli_query($conn,$sql);
  			$resultcheck = mysqli_num_rows($result);
      if ($result) {
      	# code...
      	if ($resultcheck>0) {
      		# code...
      		while ($rows = mysqli_fetch_assoc($result)) {
      			# code...
      			$password_verify = password_verify($password , $rows['finderPassword']);
      			if ($password_verify==false) {
      				# code...
      				echo '<script type="text/javascript">alert("Incorrect Password"); window.location = \'loginForm.php\';</script>';
  				      exit();
      			}
      			elseif ($password_verify==true) {
      				# code...
      				
      				$fid = $rows['finderId'];
      				 session_start();
      				 $_SESSION['FinderName'] = $username;
      				 $_SESSION['finderId'] = $fid;
      				 echo '<script type="text/javascript">alert("Finder Loged In"); window.location = \'Finder/index.php\';</script>';
      				 header("Location: Finder/index.php");
      				 exit();

      			}
      			else{
                   echo '<script type="text/javascript">alert("Something is wrong"); window.location = \'Finder/index.php\';</script>';
                   exit();
      			}

      		}
      	}
      	      else{
                   echo '<script type="text/javascript">alert("Incorrect Finder Name or password"); window.location = \'Finder/index.php\';</script>';
                   exit();
      			}
      	

      }
  	}
  }

  ?>