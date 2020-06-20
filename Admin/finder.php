<?php  
include "../dbhandler.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome Admin</title>
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
  
  <h1><a href="html/dashboard.html">Welcome Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Admin</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="Admin/html/login.html"><i class="icon-key"></i> Log Out</a></li>
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
        <li><a href="finder.php">Job Finders</a></li>
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
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i>Users</a> </li>
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
<!--End-Action boxes-->    
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Pending Users</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Finder Name</th>
                  <th>Finder Email</th>
                  <th>Activate</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              	<?php  
                  $sql = "SELECT * FROM jobfinder_reg WHERE status ='pending'";
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
                  <td><?php echo $row['finderName'] ?></td>
                  <td><?php echo $row['finderEmail'] ?></td>
                 <td class="center"><a class="btn btn-info" href="ActivateUser.php?active=<?php echo $row['finderId'] ?>">Activate</a></td>
                 <td class="center"><a class="btn btn-danger" href="DeleteUser.php?delete=<?php echo $row['finderId'] ?>">Delete</a></td>
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
        <br>
              <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Confirmed Users</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Finder Name</th>
                  <th>Finder Email</th>
                  <th>Deactivate</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              	<?php  
                  $sql2 = "SELECT * FROM jobfinder_reg WHERE status ='confirm'";
                  $result2 = mysqli_query($conn , $sql2);
                  $resultcheck2 = mysqli_num_rows($result2);
                  if ($result2) :
                  	# code...
                  	if ($resultcheck2>0) :
                  		# code...
                  		while ($row2 = mysqli_fetch_assoc($result2)) :
                  			# code...
                

              	?>
                <tr class="gradeX">
                  <td><?php echo $row2['finderName']; ?></td>
                  <td><?php echo $row2['finderEmail']; ?></td>
                  <td class="center"><a class="btn btn-danger" href="DeactivateUser.php?deactive=<?php echo $row2['finderId']; ?>">Deactivate</a></td>
                  <td class="center"><a class="btn btn-info" href="DeleteUser.php?delete=<?php echo $row2['finderId']; ?>">Delete</a></td>
                </tr>
                 <?php 
                 endwhile;
             endif;
         endif;
                 ?>
              </tbody>
               <tfoot>
               	 <tr>
			<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$resultcheck2." Records"; ?> </div></td>
			</tr>  <!-- these helps us to know the total number records  -->
               </tfoot>
            </table>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>



<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12">  <p>&copy; Copyright 2019 | All Right Reserved | Ethio-Programmers | UOG InCorporated</p> </div>
</div>

<!--end-Footer-part-->

<script src="html/js/excanvas.min.js"></script> 
<script src="html/js/jquery.min.js"></script> 
<script src="html/js/jquery.ui.custom.js"></script> 
<script src="html/js/bootstrap.min.js"></script> 
<script src="html/js/jquery.flot.min.js"></script> 
<script src="html/js/jquery.flot.resize.min.js"></script> 
<script src="html/js/jquery.peity.min.js"></script> 
<script src="html/js/fullcalendar.min.js"></script> 
<script src="html/js/matrix.js"></script> 
<script src="html/js/matrix.dashboard.js"></script> 
<script src="html/js/jquery.gritter.min.js"></script> 
<script src="html/js/matrix.interface.js"></script> 
<script src="html/js/matrix.chat.js"></script> 
<script src="html/js/jquery.validate.js"></script> 
<script src="html/js/matrix.form_validation.js"></script> 
<script src="html/js/jquery.wizard.js"></script> 
<script src="html/js/jquery.uniform.js"></script> 
<script src="html/js/select2.min.js"></script> 
<script src="html/js/matrix.popover.js"></script> 
<script src="html/js/jquery.dataTables.min.js"></script> 
<script src="html/js/matrix.tables.js"></script> 
<script src="html/js/jquery.min.js"></script> 
<script src="html/js/jquery.ui.custom.js"></script> 
<script src="html/js/bootstrap.min.js"></script> 
<script src="html/js/jquery.uniform.js"></script> 
<script src="html/js/select2.min.js"></script> 
<script src="html/js/jquery.dataTables.min.js"></script> 
<script src="html/js/matrix.js"></script> 
<script src="html/js/matrix.tables.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
