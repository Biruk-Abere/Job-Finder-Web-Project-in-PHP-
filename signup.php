<?php 
include "dbhandler.php";
 ?>
<?php
if(isset($_POST['signup']))
{
  $name = $_POST['uname'];
  $email = $_POST['uemail'];
  $pass = $_POST['upass'];
  $repass =$_POST['urepass'];
  $usertype = $_POST['usertype'];
  $status = "pending";
 
  if($name=="")  {
    $error[] = "provide username !";  
    echo '<script>alert("User Name Can Not Be Empty !");window.location=\'signupForm.php\';</script>'; 
    exit();
  }
 
  else if($email=="") {
    $error[] = "provide email id !"; 
     echo '<script>alert("email can not be empty!");window.location=\'signupForm.php\';</script>'; 
    exit(); 
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
       echo '<script>alert("please enter a valid email !");window.location=\'signupForm.php\';</script>'; 
      exit();
  }
  else if($pass=="") {
    $error[] = "provide password !";
     echo '<script>alert("password can not be empty !");window.location=\'signupForm.php\';</script>'; 
    exit();
  }
  else if($pass!==$repass){
    $error[] = 'Password not much !';
     echo '<script>alert("password do not much !");window.location=\'signupForm.php\';</script>'; 
    exit();
  }
   
  else
  {

    if ($usertype=="JobFinder") {

      $sql = "SELECT * from jobfinder_reg WHERE finderName='$name'";
      $sql_result = mysqli_query($conn , $sql);
      $result_fetch = mysqli_num_rows($sql_result);
      if ($result_fetch>0) {
        # code...
        $error[]="Username Taken";
        echo '<script type="text/javascript">alert("The Username Taken"); window.location=\'signupForm.php\';</script>';
        exit();

      }

      $password_hash = password_hash($pass , PASSWORD_DEFAULT);
      $sql = "INSERT INTO jobfinder_reg (finderName ,finderEmail , finderPassword ,status)values('$name' , '$email','$password_hash','$status')";
      $result = mysqli_query($conn , $sql);
      if ($result) {
        # code...
         
        $error[]="Registration successfully for login click on sign button";
         echo '<script>alert("Registration successfully for login click on sign button");window.location=\'loginForm.php\';</script>';
         $icon="success";
         $class="success";
      }
      else{
         $error[]="Registration Unsuccessfully";
         echo '<script type="text/javascript">alert("Registration Unsuccessfully"); window.location=\'signupForm.php\';</script>';
         $icon="warning";
         $class="danger";
      }
      
      # code...
    }
    elseif ($usertype="JobProvider") {
      $sql = "SELECT * from company_reg WHERE comapnyName='$name'";
      $sql_result = mysqli_query($conn , $sql);
      $result_fetch = mysqli_num_rows($sql_result);
      if ($result_fetch>0) {
        # code...
        $error[]="Company name Taken";
        echo '<script type="text/javascript">alert("The Company name Taken"); window.location=\'signupForm.php\';</script>';
        exit();

      }
      # code...
      $password_hash = password_hash($pass , PASSWORD_DEFAULT);
      $sql2 = "INSERT INTO company_reg (companyName , companyEmail , companyPassword , status) VALUES ('$name' , '$email' ,'$password_hash'  , '$status')";
      $result2 = mysqli_query($conn , $sql2);
      if ($result2) {
        # code...
        
        $error[]="Registration successfully for login click on sign button";
         echo '<script>alert("Registration successfully for login click on sign button");window.location=\'loginForm.php\';</script>';
         $icon="success";
         $class="success";
      }
      else{
         $error[]="Registration Unsuccessfully";
         echo '<script type="text/javascript">alert("Registration Unsuccessfully"); window.location=\'signupForm.php\';</script>';
         $icon="warning";
         $class="danger";
      }

    }
    
  } 
}
?>