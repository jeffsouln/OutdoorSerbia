<!DOCTYPE html>
<html>
<head>
  <title>Outdoor Serbia</title>
  <base href="http://localhost/outdoor/"></base>
  <meta name="description" content="Najnovije i najzanimljivije vesti i informacije iz sveta outdoor-a. Penjanje, Snowboard, Kite surf, Longboard, Turno biciklizam, Avanturističke trke... " />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script src="js/clamp.min.js" type="text/javascript"></script>
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
            <?php for ($i=0; $i < sizeof($this->category); $i++) { 
               echo "<li><a href='main/{$this->type}/{$this->category[$i]->name}'>{$this->category[$i]->name}</a></li>";
            }
            ?>
          </ul>
        </div><!--close menubar-->
      </div><!--close header-->   
    <div id="site_heading">
	    <h1><a href="">OUtd0oR SErBIA</a></h1>	
	  </div><!--close site_heading-->
	  <div id="login">
      <h1><?php 
                if (isset($_SESSION['user'])&&isset($_SESSION['status'])){
                    echo "<a href='personal'>Moja strana</a>";
                    echo "<h2><a href='logout.php'>Log out</a><h2>";
                } else {
                    echo "<a href='login'>log in</a>";
                } ?></h1>
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
		              [MAIN_CONTENT]  		  
    </div><!--close site_content--> 
    <div id="footer">  
      <a href="">Valid XHTML</a> | <a href="">Images</a> | website template by <a href="">ARaynorDesign</a>
    </div><!--close footer-->	
  </div><!--close main-->	
</body>
</html>
