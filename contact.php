<?php 
session_start();

?>

<!DOCTYPE html> 
<html>

<head>
  <title>Creativity Symposium</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>

    <!-- Bootstrap -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- favicon -->
  <link rel="icon" href="images/circle_yellow.ico" type="image/gif" sizes="16x16">
</head>

<body>
  <div id="main">
	
	<header>
	  
	  <div id="header_section">	  
	    <nav>
          <ul id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="speakers.html">Speakers</a></li>
            <li><a href="attend.html">Attend</a></li>
            <li><a href="team.html">Team</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>
          </ul>
          <a href="http://www.creativitysympoisum.brownpapertickets.com" target="_blank"><button type="button" class="btn btn-danger" id="tickets_btn">Buy Tickets</button></a>
        </nav>
      
	  </div>		
	
	</header>
    
	<div id="site_content">
	
	  <div id="content">
	
        <!-- <h2>Contact Us</h2> -->

	
<!--         <div class="slideshow">
	      <ul class="slideshow">
            <li class="show"><img width="650" height="300" src="images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
            <li><img width="650" height="300" src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          </ul> 
	    </div>	
		
		<div class="sidebar_container">       
		  <div class="sidebar">
            <div class="sidebar_item">
              <h2>New Website</h2>
              <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
            </div> 
          </div>     		
		  <div class="sidebar">
            <div class="sidebar_item">
              <h2>Latest Update</h2>
              <h3>January 2014</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		    </div> 
          </div>	
		  <div class="sidebar">
            <div class="sidebar_item">
              <h3>December 2013</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		    </div> 
          </div>		  
          <div class="sidebar">
            <div class="sidebar_item">
              <h2>Contact</h2>
              <p>Phone: +44 (0)1234 567891</p>
              <p>Email: <a href="mailto:info@youremail.co.uk">info@youremail.co.uk</a></p>
            </div> 
          </div>
        </div>   
		  
		  <div class="content_item"> -->
		    
		         
        
    <h1 style="text-align:center" class="heading_change">Contact</h1> 
<div class="wrapper">

    <?php

    if (isset($_SESSION['success'])) 
    {
        echo "<p class='success_message'> {$_SESSION['success']} </p>";
        unset($_SESSION['success']);
    }

    ?>
    <form method="post" action="process.php" class="ccform">
    <div class="ccfield-prepend">
    <div class="ccfield-prepend">
        <input class="ccformfield" type="text" name='name' placeholder="Full Name" required>
    </div>
      <!-- Type Email uses correct HTML5 validation -->
        <input class="ccformfield" type="email" name='email' placeholder="Email" required>
    </div>
     <div class="ccfield-prepend">
        <input class="ccformfield" type="text" name='subject' placeholder="Subject" required>
    </div>
    <div class="ccfield-prepend">
        <textarea class="ccformfield" name="comments" rows="8" placeholder="Message" required></textarea>
    </div>
    <div class="ccfield-prepend">
        <input class="ccbtn" type="submit" name='submit' value="Submit">
    </div>
    </form>
</div>
      

		  </div><!--close content_item-->	
      
	  </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    <footer>
	  <a href="index.html">Home</a> | <a href="speakers.html">Speakers</a> | <a href="attend.html">Attend</a> | <a href="team.html">Team</a> | <a href="contact.php">Contact Us</a><br/>
	  Email: <a href="mailto:annasunchoi@gmail.com">annasunchoi@gmail.com</a>
    </footer>   
  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
   <!-- <script type="text/javascript" src="js/jquery.min.js"></script>
  // <script type="text/javascript" src="js/image_slide.js"></script> -->	
  
</body>
</html>