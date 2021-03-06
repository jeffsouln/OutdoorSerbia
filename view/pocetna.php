<?php
require_once "config.php";
$category = category::getAll();
?><!DOCTYPE html>
<html>
<head>
  <title>Outdoor Serbia</title>
  <meta name="description" content="Najnovije i najzanimljivije vesti i informacije iz sveta outdoor-a. Penjanje, Snowboard, Kite surf, Longboard, Turno biciklizam, Avanturističke trke... " />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
  </script>
</head>

<body>
  <div id="main">	
	<div id="site_content">
    <div id="header">
      <div id="menubar">
          <ul id="menu">
            <?php for ($i=0; $i < sizeof($category); $i++) { 
               echo "<li><a href='pocetna.html'>{$category[$i]->name}</a></li>";
            }
            ?>
          </ul>
        </div><!--close menubar-->
      </div><!--close header-->   
    <div id="site_heading">
	    <h1>OUtd0oR SErBIA</h1>	
	  </div><!--close site_heading-->
	  <div id="login">
      <h1><a href="login.php">log in</a></h1> 
    </div><!--close site_heading-->
	  <div id="banner_image">
	    <div id="slider-wrapper">        
          <div id="slider" class="nivoSlider">
            <img src="images/slide1.jpg" alt="" />
            <img src="images/slide2.jpg" alt="" />
            <img src="images/slide3.jpg" alt="" />
            <img src="images/slide4.jpg" alt="" />
		  </div><!--close slider-->
		</div><!--close slider_wrapper-->
	  </div><!--close banner_image-->			  
	  <div id="content">
        
		<div class="content_item">
		  <h1>Welcome To Your Website</h1>
          <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under the Creative Commons Attribution 3.0 Licence), which means that you are free to download and use it for anything you want (including modifying and amending it). If you would like to remove the 'website template by ARaynorDesign' link from the footer of a template / website then that is OK, providing you make a small donation via the website. I do not specify an amount, just what you think the design is worth.</p>
        </div><!--close content_item-->
	    <div class="content_image">
		  <a href="#"><img style=" border: 10px solid #1D1D1D;" alt="image" src="images/stairwell.jpg" /></a>
		</div><!--close content_image-->
		<div class="content_text">
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor, leo quis tempus scelerisque, tellus massa adipiscing ante, vel scelerisque neque massa tempus ante. Vivamus libero lorem, bibendum ac elementum quis, auctor nec justo. Sed pretium velit nec dolor fringilla varius. Maecenas dapibus neque sed nisi ultrices a ullamcorper sapien imperdiet.</p>
		  <a href="#">Read More</a>
		</div><!--close content_text-->  
		<br style="clear:both"/>
	    <div class="content_image_right">
		  <a href="#"><img style=" border: 10px solid #1D1D1D;" alt="image" src="images/stairwell.jpg" /></a>
		</div><!--close content_image-->
		<div class="content_text_left">
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor, leo quis tempus scelerisque, tellus massa adipiscing ante, vel scelerisque neque massa tempus ante. Vivamus libero lorem, bibendum ac elementum quis, auctor nec justo. Sed pretium velit nec dolor fringilla varius. Maecenas dapibus neque sed nisi ultrices a ullamcorper sapien imperdiet.</p>
		  <a href="#">Read More</a>
		</div><!--close content_text-->  		
		
	  </div><!--close content-->	    

      <div class="sidebar_container">  		  
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Blog</h2>
			<h4>October 2012</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		      <a href="#">Read more</a>
           </div><!--close sidebar_item--> 
         </div><!--close sidebar-->     		
	    <div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Blog</h2>
			<h4>October 2012</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		      <a href="#">Read more</a>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Blog</h2>
			<h4>October 2012</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		      <a href="#">Read more</a>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
      </div><!--close sidebar_container-->  
	  
    </div><!--close site_content-->	
    <div id="footer">  
      <a href="">Valid XHTML</a> | <a href="">Images</a> | website template by <a href="">ARaynorDesign</a>
    </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
