   <?php 
    include("dbhandler.php");
   ?>
   <?php 
   session_start();
   if (isset($_SESSION['AdminName'])) {
     # code...
    header("Location: Admin/index.php");
   }
   if (isset($_SESSION['CompanyUsername'])) {
     # code
     header("Location: company/index.php");  
   }
   if(isset($_SESSION['FinderName'])){
     header("Location: finder/index.php");
   }

    ?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title>Dream Job Finder</title>
   	<meta charset="utf-8">
 
   	<link rel="stylesheet" type="text/css" href="css/style1.css">
   	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="jquery.js"></script>
   </head>
   <body>

  
   	  <!-- HEADER PART -->
	       <section class="abc"  >
	 <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" >
	  <header class="masthead mb-auto" >
	    <div class="inner">
	      <h3 class="masthead-brand" >Job Finder</h3>
	      <nav class="nav nav-masthead justify-content-center">
	        <a class="nav-link active" href="index.php">Home</a>
	        <a class="nav-link" href="create.php">Post a Job</a>
	        <a class="nav-link" href="loginForm.php">Log In</a>
          <a class="nav-link" href="signupForm.php">Sign Up</a>
	        <a class="nav-link" href="#team">Team</a>
	        <a class="nav-link" href="#Contact">Contact</a>
	        
	      </nav>
	    </div>
       
	</header>
   

   	  <!-- HEADER PART -->

   	  <!-- =======================================BANNER================================== -->
		       <main role="main" class="inner cover">
		    <h1 class="cover-heading" style="margin-top: 100px;">Find Your Job</h1>
		    <!-- <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
		    <p class="lead"> -->
		      <form method="GET" action="index.php" style="size: 200px;">
		        <select name="category" class="form-control" ">
		          <option value="0">Choose Category</option>
		          <?php foreach ($categories as $category):?>
		          <option value="<?php echo $category->id;?>"><?php echo $category->name; ?></option>
		          
		         <?php endforeach; ?>
		        </select>
		        <br>
		        <input type="submit" class="btn btn-lg btn-success" value="FIND" style="background-color: #26ae61;">
		      </form>
		      <!-- <a href="#" class="btn btn-lg btn-secondary">Learn more</a> -->
		    </p>
		  </main>


		  <footer class="mastfoot mt-auto">
		    <div class="inner" style="margin-top: 100px;">
		       <p>Click Here If You Want To see Our  <a href="Future.html" style="color: blue;"><strong style="color: rgba(255, 255, 255, .5);">Future Jobs</strong></a></p>
		    </div>
		  </footer>
		</div>
		</section>

  
      <!--=======================================LATEST POST part ================================  -->



      <!--=======================================LATEST POST part ================================  -->

      <!--=======================================TEAM part ========================================  -->
             <div class="" id="team"></div>
<section class="team">
    <div class="container">
      <div class="row col-md-12">
        <div class="col-lg-12 text-center">
          <h1 class=""><i class="fa fa-group" aria-hidden="true"></i> Our Team</h1>
          <h3 class=" text-muted">You can meet our team any time.</h3>
        </div>
      </div>
      <div class="row col-md-12 text-center">
        <div class="col-md-4">
            <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-danger"></i>
            <i class="fa fa-male fa-stack-1x fa-inverse text-warning"></i>
          </span>
          <h2 class="">Biruk Abere</h2>
          <h5>Designer and Developer</h5>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p><br>
          <div class="">
            <a href="#"><i class="fa fa-twitter fa-2x teamsocial "></i></a>
            <a href="#"><i class="fa fa-facebook fa-2x teamsocial"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x teamsocial"></i></a>
          </div>
        </div>
        <hr>
        <div class="col-md-4">
        	  <span class="fa-stack fa-4x">
            
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-female fa-stack-1x fa-inverse text-danger"></i>
          </span>
        
          <h2 class="">Beza Temesgen</h2>
          <h5>Designer and Developer</h5>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p><br>
          <div class="">
            <a href="#"><i class="fa fa-twitter fa-2x teamsocial"></i></a>
            <a href="#"><i class="fa fa-facebook fa-2x teamsocial"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x teamsocial"></i></a>
          </div>
        </div>
        <hr>
        <div class="col-md-4">
         <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-danger"></i>
            <i class="fa fa-male fa-stack-1x fa-inverse text-warning"></i>
          </span>
          <h2 class="">Bisrat Desalegn</h2>
          <h5>Designer and Developer</h5>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p><br>
          <div class="">
            <a href="#"><i class="fa fa-twitter fa-2x teamsocial"></i></a>
            <a href="#"><i class="fa fa-facebook fa-2x teamsocial"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x teamsocial"></i></a>
          </div>
        </div>
      </div>
    </div>
     <div class="" id="about"></div> 
  </section>





      <!--=======================================TEAM part ========================================  -->


      <!--=======================================CONTACT part ========================================  -->
      <!-- CONTACT -->
    <section>
        <div class="" id="Contact"></div> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <hr>
          <h1 class=""><i class="fa fa-phone"></i> Contact Us</h1>
          <h3 class="">we are available 24/7, u can also send any comment</h3>
        </div>
      </div>
      <div class="row">
        <form name="sentMessage" id="contactForm" class="col-md-6" method="post" action="Contact.php">

          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required>
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email *" id="email"  name="email" required>
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
           <input type="text" class="form-control" placeholder="Your Subject" name="subject" required>
           </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Your Message *" rows="6" name="message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button type="submit" class="btn btn-xl" name="submit">Send Message</button>
          </div>

        </form>
        <div class="col-md-6 contact2">
          <div class="row info">
            <h1 class="text-center">Job Contact Information</h1>
          </div>
          <div class="row info">
            <h2 class="text-dark"><i class="fa fa-phone contacticon"></i>+251 974461688 </h2>
          </div>
          <div class="row info">
            <h2 class="text-dark"><i class="fa fa-fax contacticon"></i>058118889</h2>
          </div>
          <div class="row info">
            <h3 class="text-dark"><i class="fa fa-envelope contacticon"></i>BisratDesalegn@gmail.com</h3>
          </div>
          <div class="row info">
            <h2 class="text-dark"><i class="fa fa-home contacticon"></i>Gondar, Ethiopia </h2>
          </div>
        </div>
      </div>
    </div>

  </section>
      <!--=======================================CONTACT part ========================================  -->


      <!--=======================================FOOTER part ========================================  -->

      <!--=======================================FOOTER part ========================================  -->
    
<footer class="footer">
  <div class="container">
    <p class="float-right">
    	<hr>
   <div class="btn-group">
      <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: orange;"><a href="#">Back to top</a></button>
  </div>
    </p>
    <p>&copy; Copyright 2019 | All Right Reserved | Ethio-Programmers | UOG InCorporated</p>
    
  </div>
</footer>
<!-- Scripts
================================================== -->

  

</body>
</html>


  
