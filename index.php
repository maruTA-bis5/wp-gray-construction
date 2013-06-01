<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes( 'xhtml' ); ?>>

<head>
  <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</head>

<body>
  <div id="main">
	<div id="dark_container">
	  <div id="banner">
	    <div id="welcome">
	      <h1>Welcome To Grey Construction</h1>
	    </div><!--close welcome-->
	    <div id="welcome_slogan">
	      <h1>Your Company Slogan Here</h1>
	    </div><!--close welcome_slogan-->
        <div id="slideshow">  
		  <ul class="slideshow">
            <li class="show"><img width="940" height="250" src="images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
            <li><img width="940" height="250" src="images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
          </ul> 
	    </div><!--close slideshow-->	  
	  </div><!--close banner-->	
	</div><!--close dark_container-->

	<div id="menu_container">
	  <div id="menubar">
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="ourwork.html">Our Work</a>
		    <ul>
		      <li><a href="#">Drop Down 1</a></li>
		      <li><a href="#">Drop Down 2</a></li>
			  <li><a href="#">Drop Down 3</a></li>
			</ul>
		  </li>			
          <li><a href="testimonials.html">Testimonials</a>
			<ul>
			  <li><a href="#">Drop Down 1</a></li>
		      <li><a href="#">Drop Down 2</a></li>
			  <li><a href="#">Drop Down 3</a>
			    <ul>
			      <li><a href="#">More Drop Down 1</a></li>
			  	  <li><a href="#">More Drop Down 2</a></li>
				  <li><a href="#">More Drop Down 3</a></li>
				</ul>
			  </li>
			</ul>
		  </li>			
          <li><a href="projects.html">Projects</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div><!--close menubar-->	
	</div><!--close menu_container-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>January 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>December 2012</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>November 2012</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +44 (0)1234 567891</p>
            <p>Email: <a href="mailto:info@youremail.co.uk">info@youremail.co.uk</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->     	 
	 
	  <div id="content">
        <div class="content_item">
		  <h1>Welcome To Your Website</h1> 
          <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under the Creative Commons Attribution 3.0 Licence), which means that you are free to download and use it for anything you want (including modifying and amending it). If you would like to remove the &lsquo;website template by ARaynorDesign&rsquo; link from the footer of a template / website then that is OK, providing you make a small donation via the website. I do not specify an amount, just what you think the design is worth.</p>   			  
		  
		  <div class="content_image">
		    <img src="images/content_image1.jpg" alt="image1"/>
	      </div>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.</p>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		  <br style="clear:both"/>
		  
		  <div class="content_container">
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nibh nulla, posuere a cursus aliquam, vulputate et lacus. In ultricies eleifend quam, in lacinia quam iaculis eget. Donec fringilla enim quis sem ultrices ullamcorper. Integer at nisl diam, iaculis congue eros. Praesent commodo, odio non fringilla eleifend, augue felis elementum ante, nec consequat dolor urna non augue. Nunc commodo lorem at felis tempor a interdum arcu tempor. Pellentesque blandit lobortis ligula, sit amet condimentum odio aliquam at. Mauris a felis purus. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras auctor porta tortor, nec aliquam turpis blandit ut. </p>
		  	<div class="button_small">
		      <a href="#">Read more</a>
		    </div><!--close button_small-->
		  </div><!--close content_container-->
          <div class="content_container">
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nibh nulla, posuere a cursus aliquam, vulputate et lacus. In ultricies eleifend quam, in lacinia quam iaculis eget. Donec fringilla enim quis sem ultrices ullamcorper. Integer at nisl diam, iaculis congue eros. Praesent commodo, odio non fringilla eleifend, augue felis elementum ante, nec consequat dolor urna non augue. Nunc commodo lorem at felis tempor a interdum arcu tempor. Pellentesque blandit lobortis ligula, sit amet condimentum odio aliquam at. Mauris a felis purus. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras auctor porta tortor, nec aliquam turpis blandit ut. </p>          
		  	<div class="button_small">
		      <a href="#">Read more</a>
		    </div><!--close button_small-->		  
		  </div><!--close content_container-->			  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  
 
  </div><!--close main-->
  
  <div id="footer_container">
    <div id="footer">
	  <a href="http://validator.w3.org/check?uri=referer">Valid XHTML</a> | <a href="http://fotogrph.com/">Images</a> | website template by <a href="http://www.araynordesign.co.uk">ARaynorDesign</a>
    </div><!--close footer-->  
  </div><!--close footer_container-->  
  
</body>
</html>
