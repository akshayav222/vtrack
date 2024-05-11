<?php	
	session_start();
	include('connect/db.php');
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_USER_ID']);
	unset($_SESSION['SESS_WORKSHOP_ID']);
	unset($_SESSION['SESS_FUEL_ID']);	
	unset($_SESSION['SESS_SPAREPARTS_ID']);	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>V Track</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="V Track" />
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet">	<!-- font-awesome icons -->     
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />  <!-- flexslider-CSS -->  
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen"> 
<link rel="stylesheet" href="assests/css/font-awesome.min.css">
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->    
<!-- //web-fonts -->
</head>
<body>

	<!-- banner -->
	<div id="home" class="w3ls-banner "> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">V Track</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1 class="w3lslogo"><a href="index.php">V <span> Track</span></a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li><a class="page-scroll" href="#home" data-hover="Home">Home</a></li> 											
							<li><a class="page-scroll" href="#workshop" data-hover="Workshop">Workshop</a></li>
							<li><a class="page-scroll" href="#fuel" data-hover="Fuel">Fuel</a></li>
                            <li><a class="page-scroll" href="#about" data-hover="About">About</a></li>			
							<li><a class="page-scroll" href="#login" data-hover="Login">Login</a></li>
                            <li><a class="page-scroll" href="#register" data-hover="Register">Register</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-text">  
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">  
								<h2>Track Vehicle</h2>
								<p>Want to reduce fleet cost and risk? Let's track your wheels!</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">  
								<h3>Quality Service</h3>
								<p>Get started now!</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">  
								<h3>Easy Handle</h3>
								<p>Sign up your new vehicle to track expense, book fuel and spare parts, view workshops near you, update invoices</p>
							</div>
						</li>
					</ul> 
				</div> 	  
				<a href="#register" class="wthree-btn btn-6 scroll">Register Now <span></span></a>   
			</div> 
		</div> 
		<!-- //banner-text -->   
	</div>	
	<!-- //banner --> 
	<div class="wthree-soon">
		<div class="container">
			<div class="wthree-soon-agileinfo">
				<h5>Our Turbo Car is almost ready</h5>
				<!-- timer -->
				<div class="agileits-timer"> 
					<div class="clock">
						<div class="column days">
							<div class="timer" id="days"></div>
							<div class="text">Days</div>
						</div>
						<div class="timer days"></div>
						<div class="column">
							<div class="timer" id="hours"></div>
							<div class="text">Hours</div>
						</div>
						<div class="timer"></div>
						<div class="column">
							<div class="timer" id="minutes"></div>
							<div class="text">Minutes</div>
						</div>
						<div class="timer"></div>
						<div class="column">
							<div class="timer" id="seconds"></div>
							<div class="text">Seconds</div>
						</div>
						<div class="clearfix"> </div>
					</div>	 
				</div>
				<!-- //timer --> 
				<div class="w3_agile_social_icons">
					<ul>
						<li><a href="#" class="icon icon-cube agile_facebook"></a></li>
						<li><a href="#" class="icon icon-cube agile_rss"></a></li>
						<li><a href="#" class="icon icon-cube agile_instagram"></a></li>
						<li><a href="#" class="icon icon-cube agile_t"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!---728x90--->

	<!-- about -->
	<div id="about" class="about">
		<div class="container">
			<div class="col-md-6 agileits_about_grid_left">
				
			</div> 
			<img src="images/4.png" alt=" " class="img-responsive about-w3img" />
			<div class="col-md-6 agileits_about_grid_right">
				<h3 class="agileits-title">about <span class="w3lshr-line"> </span></h3>
				<h4>A complete vehicle management system</h4>
				<p> We strive to help people who seek help in remote locations with mechanical issues on their vehicle. This is a common platform that connects service providers with drivers to ensure that the user gets immediate and hassle free service in the event of any vehicle breakdown. Finding nearest workshops, spare parts shops, fuel stations and getting help and also keeps a track of the insurance and taxes and get notifications. We also analyze the total expenses incurred by the vehicle.</p>
			</div>
			<div class="clearfix"> </div>
		</div> 
	</div>
	<div class="w3ls_about_bottom">
		<div class="container"> 
			<div class="w3_about_bottom_grid"> 
				<h4><span>The future</span> of mobility</h4>
				<a href="#myModal" class="wthree-btn btn-6"  data-toggle="modal">Read More<span></span></a> 
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!---728x90--->
	<!-- features -->
	<div id="register" class="features">
		<div class="container"> 
			<div class="w3layouts_skills_grids w3layouts-features-agileinfo">
				<div class="col-md-6 col-sm-9 w3features-right">
					<div id="register" class="login-form agileits-right"> 
						<div class="agile-row">
							<h5>Register Form</h5> 
							<div class="login-agileits-top"> 	
                            <form action="signup_save.php" method="post" autocomplete="off">
                    			<p>Name</p>
                        		<input type="text" class="name" name="name" required pattern="[a-zA-Z1 _]{3,50}">
                            	<p>Contact No</p>
                            	<input type="text" class="name" name="contact_no" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                            	<p>Email</p>
                                <input type="email" class="email" name="email" required>
                            	<p>Location</p>
                          		<input type="text" class="name" name="location" required pattern="[a-zA-Z1 _]{3,50}">
                            	<p>Password</p>
                                <input type="password" class="password" name="password" required  maxlength="15" minlength="5">
                            	<p>Sign Up</p>
                                <select name="utype" class="form-control">	
                                    <option value="">Select</option>
                                    <option>Workshop</option>
                                    <option>Fuel</option>
                                    <option>Spare_Parts</option>
                                    <option>User</option>    
                                </select>
								<input type="submit" value="Register">
								</form> 	
							</div>  
						</div>  
					</div>  
				</div>
				<div class="col-md-6 w3features-left">
					<h3 class="agileits-title">Features<span class="w3lshr-line"> </span></h3>
					<div class="w3features-grids">
						<div class="w3features-left-gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-cubes"> </i>
							</div>
						</div>
						<div class="w3features-left-gridr">
							<h4>COMPETENT WORKFORCE</h4>
							<p>An automation system makes easy dealing of you daily activities.</p>
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="w3features-grids">
						<div class="w3features-left-gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-globe"> </i>
							</div>
						</div>
						<div class="w3features-left-gridr">
							<h4>ALERT CENTER</h4>
							<p>Awareness about vehicle taxes and insurance, trace all over regular and irregular expenses.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3features-grids">
						<div class="w3features-left-gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-gear"> </i>
							</div>
						</div>
						<div class="w3features-left-gridr">
							<h4>FUELING SYSTEM</h4>
							<p>Locating nearest fuel stations and delivery available</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3features-grids">
						<div class="w3features-left-gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-hotel"> </i>
							</div>
						</div>
						<div class="w3features-left-gridr">
							<h4>COST AND INVENTORY MANAGEMENT</h4>
							<p>Manage spare parts, category and location, availability of products.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->
	<!---728x90--->
	<!-- services -->
	<div class="services jarallax">
		<div class="container"> 
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">On road</h4>
							<span class="cbp-ig-category">Services</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">Delivery</h4>
							<span class="cbp-ig-category">Fuel, Spare parts</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">Support</h4>
							<span class="cbp-ig-category">Services</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">Invoices</h4>
							<span class="cbp-ig-category">Tracking</span>
						</div>
					</li>
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
    
	<!-- gallery -->
	<div id="workshop" class="gallery">
		<div class="container">
			<h3 class="agileits-title">Workshop<span class="w3lshr-line"> </span></h3>
			<div class="main">
               <?php
				$result = $db->prepare("SELECT * FROM workshop");
				$result->execute();
				$row_count =  $result->rowcount();
				for($i=0; $rows = $result->fetch(); $i++)
					{
					?>
                <div class="col-sm-4 col-xs-6 gallry-agile-grids">
					<div class="view view-seventh">
						<a href="v_photo/<?php echo $rows['photo'];?>" class="b-link-stripe b-animate-go thickbox" title="V Track">
							<img src="v_photo/<?php echo $rows['photo'];?>" alt=""/>
							<div class="mask">
								<h4><?php echo $rows['name'];?></h4>
								<p><?php echo $rows['location'];?> <span class="p-ab"><?php echo $rows['srvce'];?></span> </p>
							</div>
						</a>
					</div>
                </div>
                <?php
						}
						?>   
				<div class="clearfix"> </div>
            </div>
		</div>
	</div>
	<!-- //gallery -->
    
    <!-- gallery -->
	<div id="fuel" class="gallery">
		<div class="container">
			<h3 class="agileits-title">Fuel Station<span class="w3lshr-line"> </span></h3>
			<div class="main">
                 <?php
					$result = $db->prepare("SELECT * FROM fuel");
					$result->execute();
					$row_count =  $result->rowcount();
					for($i=0; $rows = $result->fetch(); $i++)
					{
					?>
                <div class="col-sm-4 col-xs-6 gallry-agile-grids">
					<div class="view view-seventh">
						<a href="v_photo/<?php echo $rows['photo'];?>" class="b-link-stripe b-animate-go thickbox" title="V Track">
							<img src="v_photo/<?php echo $rows['photo'];?>" alt=""/>
							<div class="mask">
								<h4><?php echo $rows['name'];?></h4>
								<p><?php echo $rows['location'];?> <span class="p-ab"><?php echo $rows['desp'];?></span> </p>
							</div>
						</a>
					</div>
                </div>
                 <?php
						}
						?>
				<div class="clearfix"> </div>
            </div>
		</div>
	</div>
	<!-- //gallery -->
	<!-- Stats -->
	<div id="stats" class="stats services news-w3layouts jarallax"> 
		<div class="container">    
			<div class="stats-agileinfo agileits-w3layouts">
				<div class="col-sm-3 col-xs-6 stats-grid">
					<div class="stats-img">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<h6>Happy Clients</h6>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='157000' data-delay='.5' data-increment="100">157000</div>
				</div>
				<div class="col-sm-3 col-xs-6 stats-grid">
					<div class="stats-img w3-agileits">
						<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
					</div>
					<h6>Branches</h6>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='850' data-delay='8' data-increment="1">850</div>
				</div>
				<div class="col-sm-3 col-xs-6 stats-grid">
					<div class="stats-img w3-agileits">
						<i class="fa fa-briefcase" aria-hidden="true"></i>
					</div>	
					<h6>Our Events </h6> 
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5000' data-delay='.5' data-increment="10">5000</div>
				</div>
				<div class="col-sm-3 col-xs-6 stats-grid">
					<div class="stats-img w3-agileits">
						<i class="fa fa-trophy" aria-hidden="true"></i>
					</div>
					<h6>Awards</h6>
					<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='110' data-delay='8' data-increment="1">110</div>
				</div>
				<div class="clearfix"></div>
			</div> 
			<!-- Progressive-Effects-Animation-JavaScript -->  
			<script type="text/javascript" src="js/numscroller-1.0.js"></script>
			<!-- //Progressive-Effects-Animation-JavaScript -->
		</div>
	</div>
	<!-- //Stats -->   
	<!-- blog -->
	<div id="blog" class="blog gallery">
		<div class="container">        
			<h3 class="agileits-title">Our Service<span class="w3lshr-line"> </span></h3>
			<div class="blog-agileinfo">
				<div class="col-md-7 blog-w3grid-img">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">  
						<img src="images/g1.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-5 blog-w3grid-text"> 
					<h4><a href="#myModal" data-toggle="modal">Take control of your maintenance costs</a></h4>
					<h6>By <a href="#"> Admin</a> - Nov 25th, 2016 </h6>
					<p>Track any expense, from depreciation to fuel spend including recurring expenses. Easily identify where you're spending too much and gain insight to where you can reduce costs and create efficiencies.</p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
			<div class="blog-agileinfo blog-agileinfo-mdl">
				<div class="col-md-7 blog-w3grid-img blog-img-rght">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">  
						<img src="images/g2.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-5 blog-w3grid-text"> 
					<h4><a href="#myModal" data-toggle="modal">Real-time TCO tracking and reporting</a></h4>
					<h6>By <a href="#"> Admin</a> - Dec 31st, 2015 </h6>
					<p>Understanding the total cost of ownership for each of your fleet vehicles enables you to unite your industry experience with up-to-date numbers to make more informed choices about vehicle utilization and replacement policies.</p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
			<div class="blog-agileinfo">
				<div class="col-md-7 blog-w3grid-img">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">  
						<img src="images/g3.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-5 blog-w3grid-text"> 
					<h4><a href="#myModal" data-toggle="modal">All in one vehicle manager</a></h4>
					<h6>By <a href="#"> Admin</a> - Dec 25th, 2016 </h6>
					<p>Remove the headache of using spreadsheets to manage job-critical small equipment and power tools. Track small equipment and power tools alongside your vehicles and improve team accountability to get the job done.</p>
				</div> 
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<!-- //blog --> 
	<!-- contact -->
	<div id="login" class="contact">
		<div class="w3_agileits_contact_grids">
			<div class="col-md-6 col-xs-8 w3_agileits_contact_grid_left">
				<div class="agile_map">
					<iframe src="https://www.google.com/maps/embed" style="border:0"></iframe>
				</div>
				<div class="agileits_w3layouts_map_pos">
					<div class="agileits_w3layouts_map_pos1">
						<h3>Contact Info</h3>
						<p>348 Melrose Place, 4538 victoria, 4th block avenue, Palakkad.</p>
						<ul class="wthree_contact_info_address">
							<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+(0123) 232 232</li>
						</ul>
						<div class="w3_agile_social_icons w3_agile_social_icons_contact">
							<ul>
								<li><a href="#" class="icon icon-cube agile_facebook"></a></li>
								<li><a href="#" class="icon icon-cube agile_rss"></a></li>
								<li><a href="#" class="icon icon-cube agile_t"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 w3_agileits_contact_grid_right">
				<h3 class="agileits-title">Login<span class="w3lshr-line"> </span></h3>  
				<form action="login_login.php" method="post" autocomplete="off">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="email" id="input-25" name="email" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Email</span>
						</label>
					</span>
					<span class="input input--ichiro">
					<input class="input__field input__field--ichiro" type="password" id="input-26" name="password" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Password</span>
						</label>
					</span>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- contact -->
	<!-- subscribe -->
	<div class="subscribe-agileinfo services jarallax">     
		<div class="container"> 
			<h4>Subscribe Our Newsletter</h4>  
			<form action="#" method="post"> 
				<input type="email" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="Submit">
				<div class="clearfix"> </div>
			</form> 
		</div>  
	</div>
	<!-- //subscribe --> 
	<!-- copy rights start here -->
	<div class="copyw3-agile">
		<div class="container">  
			<div class="w3_agile_social_icons footer-w3icons">
				<ul>
					<li><a href="#" class="icon icon-cube agile_facebook"></a></li>
					<li><a href="#" class="icon icon-cube agile_rss"></a></li>
					<li><a href="#" class="icon icon-cube agile_instagram"></a></li>
					<li><a href="#" class="icon icon-cube agile_t"></a></li>
				</ul>
			</div> 
			<p>© 2022 V Track. All Rights Reserved |  </p>
		</div>
	</div>
	<!-- //copy right end here --> 
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="images/g5.jpg" alt=""> 
					<h5>Cras rutrum iaculis enim</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal --> 
	<!-- timer scripts --> 
	<script type="text/javascript" src=" js/moment.js"></script>
	<script type="text/javascript" src=" js/moment-timezone-with-data.js"></script>
	<script type="text/javascript" src="js/timer.js"></script>
	<!-- //timer scripts -->
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Scrolling Nav JavaScript --> 
    <script src="js/scrolling-nav.js"></script>  
	<!-- //fixed-scroll-nav-js -->  
	<!-- bth hover effect --> 
	<script>
	$(function() {
		$('.btn-6')
		.on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		  $(this).find('span').css({
			top: relY,
			left: relX
		  })
		})
		.on('mouseout', function(e) {
		  var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		  $(this).find('.btn-6 span').css({
			top: relY,
			left: relX
		  })
		}); 
	});
	</script>	
	<!-- //bth hover effect --> 
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->   
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //End-FlexSlider -->  
	<!-- pop-up-script -->
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
	$(function() {
		$('.view-seventh a').Chocolat();
	});
	</script>
	<!-- //pop-up-script -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>


	</body>
</html>