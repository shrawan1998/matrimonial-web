<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    if(!isset($_COOKIE["login"])){
		header("location:login.php");
    }
	else{
		$email=$_COOKIE["login"];
		$conn=mysqli_connect("localhost","root","","wed_web");
		if(!isset($_GET["id"])){
			header("location:search.php");
		}
		else{
			$user_code=$_REQUEST["id"];
			$rs=mysqli_query($conn,"select * from details where code='$user_code'");
			if($r=mysqli_fetch_array($rs)){
		?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Profile :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
		<!----font-Awesome----->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!----font-Awesome----->
		<script>
		$(document).ready(function(){
			$(".dropdown").hover(            
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
					$(this).toggleClass('open');        
				},
				function() {
					$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
					$(this).toggleClass('open');       
				}
			);
		});
		</script>
	</head>
	<body>
		<!-- ============================  Navigation Start =========================== -->
		 <?php
			include("navbars.php");
		?>
		<!-- ============================  Navigation End ============================ -->
		<div class="grid_3">
		  <div class="container">
		   <div class="breadcrumb1">
			  <ul>
				<a href="view_profile.php"><i class="fa fa-home home_1"></i></a>
				<span class="divider">&nbsp;|&nbsp;</span>
				<li class="current-page">Profile</li>
			  </ul>
		   </div>
		   <div class="col-md-9 profile_left1">
			<h1>Recently Viewed Profile</h1>
			<div class="profile_top">
				<div class="col-sm-3 profile_left-top">
					<img src="image/<?=$r["code"]?>.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-sm-2">
					<ul class="login_details1">
							 
					</ul>
				</div>
				<div class="col-sm-6">
				<?php
					if(isset($_GET["empty"])){
						print("<h3 style='color:red'>Enter Message!</h3>");
					}
					else if(isset($_GET["success"])){
						print("<h3 style='color:blue'>Sent Successfully!</h3>");
					}
					else if(isset($_GET["again"])){
						print("<h3 style='color:red'>Try Again!</h3>");
					}
				?>
					<table class="table_working_hours">
					  <tbody>
						<tr class="opened_1">
						  <td class="day_label">First Name :</td>
						  <td class="day_value"><?=$r["fname"]?></td>
						</tr>
						<tr class="opened">
						  <td class="day_label">Last Name :</td>
						  <td class="day_value"><?=$r["lname"]?></td>
						</tr>
						<tr class="opened">
						  <td class="day_label">Date of Birth :</td>
						  <td class="day_value"><?=$r["birth"]?></td>
						</tr>
						<tr class="opened">
						  <td class="day_label">Gender :</td>
						  <td class="day_value"><?=$r["gender"]?></td>
						</tr>
						<tr class="opened">
						  <td class="day_label">Caste :</td>
						  <td class="day_value"><?=$r["caste"]?></td>
						</tr>
						<tr class="closed">
						  <td class="day_label">Religion :</td>
						  <td class="day_value closed"><span><?=$r["religion"]?></span></td>
						</tr>
						<tr class="closed">
						  <td class="day_label">Occupation :</td>
						  <td class="day_value closed"><span><?=$r["occupation"]?></span></td>
						</tr>
						<tr class="closed">
						  <td class="day_label">City :</td>
						  <td class="day_value closed"><span><?=$r["city"]?></span></td>
						</tr>
						<tr class="closed">
						  <td class="day_label">State :</td>
						  <td class="day_value closed"><span><?=$r["state"]?></span></td>
						</tr>
						<tr class="closed">
						  <td class="day_label">Country :</td>
						  <td class="day_value closed"><span><?=$r["country"]?></span></td>
						</tr>
						</tr class="closed">
						  <td class="day_label">Message :</td>
						</tr>
					</tbody>
				</table>
				   <!--<div class="buttons">
					   <div class="vertical"><a style="color:white" href="msg.php">Send Message</div>
					   <div class="vertical">Shortlisted</div>
					   <div class="vertical">Send Interest</div>
				   </div>-->
				   <form method="post" action="msg.php?id=<?=$user_code?>">
					 <textarea rows=3 class="form-control" style="resize:none" name="msg" required></textarea><br>
					 <input type="submit" value="Send Message" name="send" class="btn btn-danger">
				   </form>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div>
		<div class="col-md-3 match_right">
			<div class="profile_search1">
			   <form>
				  <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
				  <input type="submit" value="Go">
			   </form>
		   </div>
		   <section class="slider">
			 <h3>Happy Marriage</h3>
			 <div class="flexslider">
				<ul class="slides">
				  <li>
					<img src="images/s2.jpg" alt=""/>
					<h4>Lorem & Ipsum</h4>
					<p>It is a long established fact that a reader will be distracted by the readable</p>
				  </li>
				  <li>
					<img src="images/s1.jpg" alt=""/>
					<h4>Lorem & Ipsum</h4>
					<p>It is a long established fact that a reader will be distracted by the readable</p>
				  </li>
				  <li>
					<img src="images/s3.jpg" alt=""/>
					<h4>Lorem & Ipsum</h4>
					<p>It is a long established fact that a reader will be distracted by the readable</p>
				  </li>
				</ul>
			  </div>
		   </section>
		   <div class="view_profile view_profile2">
					<h3>View Similar Profiles</h3>
					<ul class="profile_item">
					  <a href="#">
					   <li class="profile_item-img">
						  <img src="images/p5.jpg" class="img-responsive" alt=""/>
					   </li>
					   <li class="profile_item-desc">
						  <h4>2458741</h4>
						  <p>29 Yrs, 5Ft 5in Christian</p>
						  <h5>View Full Profile</h5>
					   </li>
					   <div class="clearfix"> </div>
					  </a>
				   </ul>
				   <ul class="profile_item">
					  <a href="#">
					   <li class="profile_item-img">
						  <img src="images/p6.jpg" class="img-responsive" alt=""/>
					   </li>
					   <li class="profile_item-desc">
						  <h4>2458741</h4>
						  <p>29 Yrs, 5Ft 5in Christian</p>
						  <h5>View Full Profile</h5>
					   </li>
					   <div class="clearfix"> </div>
					  </a>
				   </ul>
				   <ul class="profile_item">
					  <a href="#">
					   <li class="profile_item-img">
						  <img src="images/p7.jpg" class="img-responsive" alt=""/>
					   </li>
					   <li class="profile_item-desc">
						  <h4>2458741</h4>
						  <p>29 Yrs, 5Ft 5in Christian</p>
						  <h5>View Full Profile</h5>
					   </li>
					   <div class="clearfix"> </div>
					  </a>
				   </ul>
				   <ul class="profile_item">
					  <a href="#">
					   <li class="profile_item-img">
						  <img src="images/p8.jpg" class="img-responsive" alt=""/>
					   </li>
					   <li class="profile_item-desc">
						  <h4>2458741</h4>
						  <p>29 Yrs, 5Ft 5in Christian</p>
						  <h5>View Full Profile</h5>
					   </li>
					   <div class="clearfix"> </div>
					  </a>
				   </ul>
			   </div>
			</div>
			<div class="clearfix"> </div>
		  </div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
		</div>
		<div class="footer">
				<div class="container">
					<div class="col-md-4 col_2">
						<h4>About Us</h4>
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
					</div>
					<div class="col-md-2 col_2">
						<h4>Help & Support</h4>
						<ul class="footer_links">
							<li><a href="#">24x7 Live help</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="#">Feedback</a></li>
							<li><a href="faq.html">FAQs</a></li>
						</ul>
					</div>
					<div class="col-md-2 col_2">
						<h4>Quick Links</h4>
						<ul class="footer_links">
							<li><a href="privacy.html">Privacy Policy</a></li>
							<li><a href="terms.html">Terms and Conditions</a></li>
							<li><a href="services.html">Services</a></li>
						</ul>
					</div>
					<div class="col-md-2 col_2">
						<h4>Social</h4>
						<ul class="footer_social">
						  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
						  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
						  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
						  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<div class="copy">
					  <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					</div>
				</div>
		</div>
		<!-- FlexSlider -->
		<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
		  <script defer src="js/jquery.flexslider.js"></script>
		  <script type="text/javascript">
			$(function(){
			  SyntaxHighlighter.all();
			});
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		  </script>
		<!-- FlexSlider -->
	</body>
</html>	
			<?php
			}
			else{
				header("location:search.php");
			}
		}
    }
?>