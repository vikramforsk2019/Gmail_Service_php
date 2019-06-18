<?php
require_once('settings.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Find Rooms,Flats,Houses,Shops</title>
<!-- for-mobile-apps -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="room for To-Let,room for student,room for rent" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
 <link rel="shortcut icon" type="image/x-icon"  href="admin/img/house.png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--Developer ankit yadav rahul kumar, vikarm singh gurjar!-->
<link rel="stylesheet" href="cs/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="vendor/rahul.css">

	<link href="cs/owl.theme.css" rel="stylesheet">
	<link rel="stylesheet" href="cs/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="cs/bootstrap.css"> 
	<link rel="stylesheet" href="cs/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="cs/font-awesome.css"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
<!--/banner-section-->
<div id="loader-wrapper">
				<div id="preloader_1">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
			</div>
	<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
	<script type="text/javascript" src="vendor/theme.js"></script>
	
	<div id="demo-1" data-zs-src='["images/2.jpg", "images/1.jpg", "images/3.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">

		   <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				        <div id="sidebar"> 
						     <h4 class="menu">menu</h4>
						          <ul>
						          	 <li><a href="index.php"></i> Home</a></li>
						          	  <li><a href="login.php">Register</a></li>
						               <li><a href="login.php">My account</a></li>
						          	   <li><a href="login.php">Post Add</a></li>
							    
							   <li><a href="team.php">Team</a></li>
							   <li><a href="contact.php">Contact-Us</a></li>
							   
							
						   </ul>
						   <div id="sidebar-btn">
							   <div>
							   <span></span>
							   <span></span>
							   <span></span>
							</div>
							  
						   </div>
					   </div>

							 <script>
								  var sidebarbtn = document.getElementById('sidebar-btn');
									var sidebar = document.getElementById('sidebar');
								   sidebarbtn.addEventListener('click', function () {
								  if(sidebar.classList.contains('visible')){
										sidebar.classList.remove('visible'); 
								   }else {
										sidebar.className = 'visible';
									}
								  });
								</script>
					    <!-- //sidebar -->
					 
					 
					</div><br>
				  <!-- //header-left -->
		           <div class="search-box">
						
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
					   
					</div>
				
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
		    <!--banner-info-->
			<div class="banner-info">
			  <h3><a href="index.php"><span class="logo-sub">To-Let for students </span> </a></h3>
			  
					<a class="btn1" href="login.php">Post Room</a>
					<a class="btn1" href="search.php">Find Room</a>
					
			</div>
				<!--//banner-info-->	
		</div>
</div>
<!-- discounts-->
	
	<!-- //sign-up-->
             <div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Sign Up</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
							 <form action="#" method="post">
									<input type="text" name="name" class="name active" placeholder="Your Name" required="">
									<input type="text" name="email" class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">		
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me</label>
									<div class="login-bottom one">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>
										
										  <input type="submit" value="SIGN UP">
										
										</li>
									<div class="clearfix"></div>
								</ul>
								</div>	
								</form>
							</div>
							
							
						 </div>
						   <div class="social-icons">
									<ul> 
										<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
										<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
										<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
									</ul> 
									</div>
								
					</div>
								
					</div>
				</div>
			</div>
			<!-- //sign-up-->
				<!-- /location-->
				<div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Please Tell Us Your City</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top location">
								 <form action="#" method="post">
				                      <select id="country12" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
														<option value="city">Amsterdam</option>
														<option value="city">Bahrain</option>
														<option value="city">Cannes</option>
														<option value="city">Dublin</option>
														<option value="city">Edinburgh</option>
														<option value="city">Florence</option>
														<option value="city">Georgia</option>
														<option value="city">Hungary</option>
														<option value="city">Hong Kong</option>
														<option value="city">Johannesburg</option>
														<option value="city">Kiev</option>
														<option value="city">London</option>
														<option value="city">Others...</option>
										</select>
								</form>
							     </div>
							
							
						 </div>

								
					</div>
				</div>
			</div>
	
			<section class="w3-services" id="services">
	<div class="container">
		<h3 class="heading">Services</h3>
			<div class="w3-services-grids">
				<div class="col-md-3 w3-services-left-grid">
					<h4>Description</h4>
					<p>The Kota is a huge City, with this vast expanse of urban land and well-populated Education HUb, it’s not difficult to find roommates and rooms for rent in Education Hub Kota. However, the wide-ranging choices and numerous “roommate wanted” offerings may be somewhat overwhelming. roomseeker.in is extremely useful in this area. </p>
					<div class="more">
						<a href="#">Know more</a>
					</div>
				</div>
				<div class="col-md-9 w3-services-right-grid">
				<div class="w3-icon-grid-gap1">
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-building-o" aria-hidden="true"></i>
						<h3>Hostels</h3>
						<div class="clearfix"></div>
						<p>Hostels can be rented exclusively So your group will have the whole hostel to itself</p>
					</div>
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-home" aria-hidden="true"></i>
						<h3>flats</h3>
						<div class="clearfix"></div>
						<p>RoomSeeker are here with expert tools and advice to help you find the right flatshare for you.</p>
					</div>
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-hotel" aria-hidden="true"></i>
						<h3>Rooms</h3>
						<div class="clearfix"></div>
						<p>Find your perfect room, discover who lives there and arrange a viewing.</p>
					</div>
					<div class="clearfix"></div>
					</div>
					<div class="w3-icon-grid-gap2">
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3>Shared-Rooms</h3>
						<div class="clearfix"></div>
						<p>See Roommates searching in your area and find the right person for your Roomshare. </p>
					</div>
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-home" aria-hidden="true"></i>
						<h3>Houses</h3>
						<div class="clearfix"></div>
						<p>SEARCH every type of rental House: Short Term and Long Term, Furnished and Unfurnished,.</p>
					</div>
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-home" aria-hidden="true"></i>
						<h3>Shops</h3>
						<div class="clearfix"></div>
						<p>You will receive the shop space in fully furnished or non-furnished condition  with complete electrical fittings.</p>
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
		</div>
	</div>
</section>
<!-- Popular packages  -->
<section class="packages" id="packages">
	<div class="container">
		<h3 class="heading">Hostels,Flat,Room on Rent anywhere</h3>

		<div class="popular_packages_grids">
			<div class="package_top_grid">
				<div class="col-md-6">
					<div class="packages_left">
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="packages_right">
						<h3>PG and Hostels</h3>
						<h4>Starts from ₹5000</h4>
						<p>Here you can find the budget oriented rooms in hostels and PG both as per your own choice.
                          We help you to provide to find the safest Hostels and PG's in the city.
						</p>
						<a href="#">Read More <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="package_middle_grid">
				<div class="col-md-6">
					<div class="packages_right packages_right1">
						<h3>Flats and Rooms</h3>
						<h4>Rooms Starts from ₹1500</h4>
						<p>We provide the easy Way to find Room and Flats in the city.The types of Room available are Single,Double and Shared Rooms.The Flats you can Rent are as 1-BHK,2-BHK,3-BHK and more</p>
						<a href="#">Read More <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="packages_left1">
						
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="package_bottom_grid">
				<div class="col-md-6">
					<div class="packages_left2">
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="packages_right packages_right2">
						<h3>House and Shops</h3>
						<h4>Shops start from ₹4000</h4>
						<p> Here you can find numerous types of Houses and Shops for Rent in Furnished and Non-furnished condition with full facilities.</p>
						<a href="#">Read More <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
</section>		

</div>
	
	
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>We're RoomSeeker, the RoomSeeker site you can trust. Finding the right people to live with can feel like an impossible task - we're here to make it simpler, quicker and safer to help you find the perfect room,flats,hostels and Houses on Rent.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Find us on</h3>
					<ul>
						<li><i class="fa fa-facebook" aria-hidden="true"></i>
                                  </i>facebook</li>
						<li><i class="fa fa-instagram" aria-hidden="true"></i><a href="mailto:info@example.com">instragram</a></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i></i>twitter</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Flickr View</h3>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/17.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/18.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/19.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/20.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/21.jpeg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/22.jpeg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">best site for Rooms </a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/23.jpeg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">Best rental platform</a></h4>
							<p>Posted On 25/4/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/24.jpeg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">easy to find </a></h4>
							<p>Posted On 25/5/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s" >
				<p>&copy roomseeker.in</p>
			</div>
		</div>
	</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo").flexisel({
					visibleItems:1,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed:1000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 1
						},
						tablet: { 
							changePoint:768,
							visibleItems: 1
						}
					}
				});
				});
				</script>
						<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/bootstrap.js"></script>
 

</body>
</html>
