<?php 
include "../dbhandler.php";
 ?>
<?php 
  session_start();
  if (isset($_SESSION['CompanyUsername'])) {
  	# code...
  }
  else{
  	// echo '<script type="text/javascript">alert("Session Not Set")</script>';
    echo '<script type="text/javascript">alert("Session Not Set");window.location=\'../index.php\'</script>';
        exit();
  }
 ?>
   <?php 
    if (isset($_POST['submit'])) {
    	# code...
    	$companyname = $_SESSION['name'];
    	$categoryname=$_POST['category'];
    	$jobname=$_POST['title'];
    	$qualification=$_POST['Qualification'];
    	$salary=$_POST['salary'];
    	$description=$_POST['description'];

    	$pic=$_FILES["img"]["name"];
	    $tmp=$_FILES["img"]["tmp_name"];
	    $type=$_FILES["img"]["type"];
    	$path = 'images/jobs/'.$pic;

    	$pic2 =$_FILES["img2"]["name"];
    	$tmp2 = $_FILES["img2"]["tmp_name"];
    	$type2 = $_FILES["img2"]["type"];
    	$path2 = "images/category/".$pic2;

    	$icon="warning";
	    $class="danger";

    	if ($type=="application/pdf"||$type=="application/x-zip-compressed") {
    		# code...
    		echo '<script type="text/javascript">alert("the file not supported");window.location=\'post.php\'</script>';
    		exit();
    	}
    	if ($type2=="application/pdf"||$type2=="application/x-zip-compressed") {
    		# code...
    		echo '<script type="text/javascript">alert("the file not supported");window.location=\'post.php\'</script>';
    		exit();
    	}
       else{
       	 $sql = "INSERT INTO postjob(companyName,categoryName ,jobTitle,salary,description,jobImage,categoryImage,minQualification) VALUES('$companyname','$categoryname','$jobname','$salary','$description','$pic','$pic2','$qualification')";
       	 $result = mysqli_query($conn,$sql);
       	 if ($result) {
       	 	# code...
       	 	move_uploaded_file($tmp, $path);
       	 	move_uploaded_file($tmp2, $path2);
       	 	echo '<script type="text/javascript">alert("Job Posted");window.location=\'post.php\'</script>';
       	 	 $icon="success";
	         $class="success";	
    		exit();

       	 }
       	 else{
       	 	echo '<script type="text/javascript">alert("Job Not Posted");window.location=\'post.php\'</script>';
    		exit();
       	 }
       }
        
    	

    }

    ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<title>Post a Job</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="html/css/bootstrap.min.css" />
<link rel="stylesheet" href="html/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="html/css/fullcalendar.css" />
<link rel="stylesheet" href="html/css/matrix-style.css" />
<link rel="stylesheet" href="html/css/matrix-media.css" />
<link href="html/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="html/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Welcome Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $_SESSION['CompanyUsername']; ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="user.php"><i class="icon icon-signal"></i> <span>User</span></a> </li>
   <!--  <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Manage JobFinder</span></a> </li> -->
    <li class="submenu"> <a href="#"><i class="icon icon-inbox"></i> <span>Manage JobFinder</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <!-- <li><a href="tables.html"><i class="icon icon-th"></i> <span>Manage JobProvider</span></a></li> -->
    <li class="submenu"> <a href="#"><i class="icon icon-th"></i> <span>Manage JobProvider</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Change Password</span></a></li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>News</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Feedback</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="user.php"> <i class="icon-signal"></i>Users</a> </li>
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span>  JobFinder </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> JobProvider</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> News</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Feedback</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>


      </ul>
    </div>
    <!--  <div id="content"> -->
 <!--  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Form wizard</a> </div>
    <h1>Form wizard</h1>
  </div> -->
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Post Your Job <?php echo $_SESSION['name']; ?></h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post" action="post.php">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Job Category</label>
                  <div class="controls">
                    <input id="category" type="text" name="category" />

                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Job Title</label>
                  <div class="controls">
                    <input id="title" type="text" name="title" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Min Qualification</label>
                  <div class="controls">
                    <select name="Qualification">
                    	<option value="0">Choose Your min qualification</option>
                    	<option value="None">None</option>
                    	<option value="Degree">Degree</option>
                    	<option value="Masters">Masters</option>
                    	<option value="Doctor">Doctor</option>
                    	<option value="Phd">Phd</option>
                    </select>
                  </div>
                </div>
                 <div class="control-group">
                  <label class="control-label">Job Salary</label>
                  <div class="controls">
                    <input id="salary" type="text" name="salary" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Job Description</label>
                  <div class="controls">
                    <textarea name="description"></textarea>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Job Image</label>
                  <div class="controls">
                    <input type="file" name="img">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Category Image</label>
                  <div class="controls">
                   <input type="file" name="img2" placeholder="choose Image">
                  </div>
                </div>
                
                <!-- <div class="control-group">
                  <label class="control-label">EULA</label>
                  <div class="controls">
                    <input id="eula" type="checkbox" name="eula" />
                  </div> -->
                </div>
              </div>
              <div class="form-actions">
               <!--  <input id="next" class="btn btn-primary" type="submit" value="Save" /> -->
                <button type="submit" class="btn btn-primary" name="submit">Save </button>
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>
           </div>
            <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Posted Jobs</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Job Ctegory</th>
                  <th>Job Name</th>
                  <th>Min Qualification</th>
                  <th>Salary</th>
                  <th>Description</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              	<?php
              	  
               $sql = "SELECT * FROM postjob WHERE companyName='".$_SESSION['name']."'";
                  $result = mysqli_query($conn , $sql);
                  $resultcheck = mysqli_num_rows($result);
                  if ($result) :
                  	# code...
                  	if ($resultcheck>0) :
                  		# code...
                  		while ($row = mysqli_fetch_assoc($result)) :
                  			# code...
                

              	?>
                <tr class="gradeX">
                  <td><?php echo $row['categoryName'] ?></td>
                  <td><?php echo $row['jobTitle'] ?></td>
                  <td><?php echo $row['minQualification'] ?></td>
                  <td><?php echo $row['salary'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td><a class="btn btn-danger" href="DeleteJob.php?delete=<?php echo $row['jobId']; ?>">Delete</a></td>
                  
                </tr>
                <?php 
                 endwhile;
             endif;
         endif;
                 ?>
              </tbody>
               <tfoot>
               	 <tr>
			<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$resultcheck." Records"; ?> </div></td>
			</tr>  <!-- these helps us to know the total number records  -->
               </tfoot>
            </table>
          </div>
        </div>

        </div>
      </div>
    </div>
