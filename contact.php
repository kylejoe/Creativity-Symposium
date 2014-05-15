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
            <li class="current"><a href="contact.php">Contact</a></li>
          </ul>
         <a href="http://www.brownpapertickets.com/event/670731" target="_blank"><button type="button" class="btn btn-danger" id="tickets_btn">Buy Tickets</button></a>
        </nav>
      
	  </div>		
	
	</header>
    
	<div id="site_content">
	
	  <div id="content">
	
		         
        
    <h1 style="text-align:center" class="heading_change">Contact</h1> 
<div class="wrapper">

  <p>For any questions, please use the form below and we will return your contact within 24 business hours. If this is an urgent matter, you may call the Event Producer Anna Choi at (805) 369-1569.</p>
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
	  <a href="index.html">Home</a> | <a href="speakers.html">Speakers</a> | <a href="attend.html">Attend</a> | <a href="team.html">Team</a> | <a href="contact.php">Contact</a><br/>
	  Email: <a href="mailto:annasunchoi@gmail.com">annasunchoi@gmail.com</a>
    </footer>   
  
  </div><!--close main-->

  <!-- javascript at the bottom for fast page loading -->
   <!-- <script type="text/javascript" src="js/jquery.min.js"></script>
  // <script type="text/javascript" src="js/image_slide.js"></script> -->	
  
</body>
</html>