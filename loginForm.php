<?php 
include "dbhandler.php";
 ?>
 <?php 
   session_start();
  if(isset($_POST["login"])){
      $name=$_POST["uname"];
      $pass=$_POST["upass"];
      $usertype = $_POST["usertype"];
      
       if($usertype== "Adminstrator"){
         $sql1 = "SELECT * FROM admin_reg WHERE adminName='$name' AND adminPassword='$pass'";
         $result = mysqli_query($conn,$sql1);
         $resultcheck = mysqli_num_rows($result);
         if($resultcheck>0){
          while ($row = mysqli_fetch_assoc($result)) {
            # code...
              $name1 = $row['adminName'];
              $id = $row['adminId'];
              $email = $row['adminEmail'];
              $_SESSION['Adminname'] = $name1;
              $_SESSION['Adminid'] = $id;
              $_SESSION['Adminemail'] = $email;
              echo '<script type="text/javascript">alert("Admin Loged In"); window.location=\'Admin/index.php\';</script>';
              header("Location: Admin/index.php");
              // header("Location: Admin/index.php");
            // $password_hash = password_verify($pass , $row['adminPassword']);
            // if ($password_hash==false) {
            //   # code...
            //   echo '<script type="text/javascript">alert("Incorrect Password"); window.location=\'index.php\';</script>';
            //   exit();

            // // }
            // elseif ($password_hash==true) {
            //   # code...
            

            // }
            // else{
            //   echo '<script type = "text/javascript">alert("something wrong"); window.location=\'index.php\'</script>';
            //   exit();
            // }
          }
         }
         else{
          echo '<script type="text/javascript">alert("Invalid Admin Name");window.location=\'index.php\';<script>';
          exit();
         }
       }
       elseif($usertype=="JobProvider"){
        $sql2 = "SELECT * FROM company_reg WHERE companyName='$name' and status = 'confirm' ";
        $result2 = mysqli_query($conn, $sql2);
        $resultcheck = mysqli_num_rows($result2);
        if($resultcheck>0){
          while ($row = mysqli_fetch_assoc($result2)) {
            # code...
            $password_hash = password_verify($pass , $row['comapnyPassword']);
            if ($pasasword_hash==false) {
              echo '<script type="text/javascript">alert("Invalid Password"); window.location=\'index.php\';</script>';
              exit();
              # code...
            }
            elseif ($password_hash==true) {
              # code...
              $name = $row['comapnyName'];
              $id = $row['companyId'];
              $email = $row['companyEmail'];

              //let us make seession variable
              $_SEESION['Companyname'] = $name;
              $_SESSION['Companyid'] = $id;
              $_SESSION['Companyemail'] = $email;

              header("Location: company/index.php");
              exit();


            }
            else{
              echo '<script type="text/javascript">alert("something is wrong"); window.location=\'index.php\';</script>';
              exit();

            }

          }
        }
        else{
              echo '<script type="text/javascript">alert("Invalid Job Provider Name or Not Confirmed"); window.location=\'index.php\';</script>';
              exit();
           } 
       }
     elseif ($usertype=="JobFinder") {

       # code...
      $sql3 = "SELECT * FROM jobfinder_reg WHERE finderName = '$name' AND status = 'confirm'";
      $result3 = mysqli_query($conn , $sql3);
      $resultcheck = mysqli_num_rows($result3);
      if ($resultcheck>0) {
        # code...
        while ($row = mysqli_fetch_assoc($result3)) {
          # code...
           $password_hash = password_verify($pass , $row['finderPassword']);
            if ($password_hash==false) {
              # code...
              echo '<script type="text/javascript">alert("Invalid JobFinder Password"); window.location=\'index.php\';</script>';
              exit();

            }
             elseif ($password_hash==true) {
              # code...
              $name = $row['findeName'];
              $id = $row['finderId'];
              $email = $_row['finderEmail'];

              $_SESSION['Findername']= $name;
              $_SESSION['Finderid']= $id;
              $_SESSION['Finderemail'] = $email;

              header("Location: user/index.php");
              exit();

            }
            else{
                echo '<script type="text/javascript">alert("something is wrong"); window.location=\'index.php\';</script>';
              exit();
            }
        }
      }

     }
      else{
           echo '<script type="text/javascript">alert("Invalid JobFinder Name or Not Confirmed"); window.location=\'index.php\';</script>';
              exit();
        }
       
       

}
  ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Dream Job Finder</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap1.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="Admin/html/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="post" action="login.php">
				 <div class="control-group normal_text"> <h3>Log in and get to work</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                          <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input type="text" placeholder="Username" name="uname" required />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" placeholder="Password" name="upass" required />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <select name="usertype">
                                <option value="0">Choose Your Type</option>
                                <option value="JobFinder">JobFinder</option>
                                <option value="JobProvider">JobProvider</option>
                                <option value="Adminstrator">Adminstrator</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><button type="submit" name="login" class="btn btn-success">Login</button></span>
                </div>
               
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="Admin/html/js/jquery.min.js"></script>  
        <script src="Admin/html/js/matrix.login.js"></script> 
    </body>

</html>
