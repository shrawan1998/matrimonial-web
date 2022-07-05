<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
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
	include("navbar.php");
?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	  <?php
			if(isset($_GET["empty"])){
				?>
					<div class="alert alert-danger">
						<h3>All Field Required</h3>
					</div>
				<?php
			}
			else if(isset($_GET["pass_error"])){
				?>
					<div class="alert alert-danger">
						<h3>Password not matched</h3>
					</div>
				<?php
			}
			else if(isset($_GET["success"])){
				?>
					<div class="alert alert-success">
						<h3>Registered Successfully</h3>
					</div>
				<?php
			}
			else if(isset($_GET["again"])){
				?>
					<div class="alert alert-danger">
						<h3>Try Again</h3>
					</div>
				<?php
			}
			else if(isset($_GET["upload_error"])){
				?>
					<div class="alert alert-danger">
						<h3>Image upload failed</h3>
					</div>
				<?php
			}
		?>
	     <form method="post" enctype="multipart/form-data" action="insert_reg.php">
	  	    <div class="form-group">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" name="fname" value="" class="form-text required" required>
		    </div>
			<div class="form-group">
		      <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" name="lname" value="" class="form-text required" required>
		    </div>
			<div class="form-group">
		      <label for="edit-email">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required" required>
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required" required>
		    </div>
			<div class="form-group">
		      <label for="edit-pass">Retype-Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="repass" size="60" maxlength="128" class="form-text required" required>
		    </div>
		    <div class="age_select">
		      <label for="edit-age">DOB <span class="form-required" title="This field is required.">*</span></label>
		      <input type="date" name="dob" value="" class="form-control" required>
                  <div class="clearfix"> </div>
            </div>
            <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="sex">Gender : </label>
                <div class="col-sm-5">
                    <input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
                </div>
                <div class="clearfix"> </div>
            </div>
			<div class="form-group">
				<label class="edit-caste">Caste<span class="form-required" title="This field is required.">*</span></label>
				<select name="caste" class="form-control" required>
					<option value="">Select</option>
					<option value="Sharma">Sharma</option>
					<option value="Verma">Verma</option>
					<option value="Jat">Jat</option>
					<option value="Gupta">Gupta</option>
					<option value="Jain">Jain</option>
					<option value="Soni">Soni</option>
					<option value="Sain">Sain</option>
					<option value="Saini">Saini</option>
					<option value="Sisodia">Sisodia</option>
					<option value="Shekhawat">Shekhawat</option>
					<option value="Rathod">Rathod</option>
					<option value="Chauhan">Chauhan</option>
					<option value="Yadav">Yadav</option>
				</select>
			</div>
			<div class="form-group">
				<label class="edit-religion">Religion<span class="form-required" title="This field is required.">*</span></label>
				<select name="religion" class="form-control" required>
					<option value="">Select</option>
					<option value="Hindu">Hindu</option>
					<option value="Sikh">Sikh</option>
					<option value="Jain">Jain</option>
					<option value="Buddhism">Buddhism</option>
					<option value="Christian">Christian</option>
					<option value="Parsi">Parsi</option>
					<option value="Islam">Islam</option>
					<option value="Other">Other</option>
				</select>
			</div>
			<div class="form-group">
		      <label for="edit-occupation">Occupation <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" name="occupation" value="" class="form-text required" required>
		    </div>
			<div class="form-group">
				<label class="edit-city">City<span class="form-required" title="This field is required.">*</span></label>
				<select name="city" class="form-control">
					<option value="">Select</option>
					<option value="Jaipur">Jaipur</option>
					<option value="Jodhpur">Jodhpur</option>
					<option value="Kota">Kota</option>
					<option value="Delhi">Delhi</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Srinagar">Srinagar</option>
					<option value="Lakhnau">Lakhnau</option>
					<option value="Patna">Patna</option>
					<option value="Bhopal">Bhopal</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Banglore">Banglore</option>
					<option value="Kolkata">Kolkata</option>
					<option value="Dishpur">Dishpur</option>
				</select>
			</div>
			<div class="form-group">
				<label class="edit-state">State<span class="form-required" title="This field is required.">*</span></label>
				<select name="state" class="form-control">
					<option value="">Select</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Delhi">Delhi</option>
					<option value="Goa">Goa</option>
					<option value="Gujrat">Gujrat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalya">Meghalya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Sri Nagar">Sri Nagar</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="West Bengal">West Bengal</option>
				</select>
			</div>
			<div class="form-group">
				<label class="edit-country">Country<span class="form-required" title="This field is required.">*</span></label>
				<select name="country" class="form-control">
					<option value="">Select</option>
					<option value="India">India</option>
					<option value="USA">USA</option>
					<option value="Japan">Japan</option>
					<option value="France">France</option>
					<option value="Nepal">Nepal</option>
					<option value="Bhutan">Bhutan</option>
					<option value="Sri Lanka">Sri Lanka</option>
					<option value="Russia">Russia</option>
				</select>
			</div>
			<div class="form-group">
				<label class="edit-photo">Upload Image<span class="form-required" title="This field is required.">*</span></label>
				<input type="file" name="photo" class="form-control">
			</div>
			<div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">&nbsp;
				<label style="font-family:arial">already registered ? <a href="login.php" style="color:red">Login</a>
			</div>
		 </form>
	  </div>
	  <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
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
</body>
</html>	