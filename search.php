<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Search :: w3layouts</title>
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
<?php
	if(!isset($_COOKIE["login"])){
		header("location:login.php?cookie_error=1");
	}
	else{
		$email=$_COOKIE["login"];
		$conn=mysqli_connect("localhost","root","","wed_web");
		?>
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
        <li class="current-page">Regular Search</li>
     </ul>
   </div>
   <!--<script type="text/javascript">
    $(function () {
     $('#btnRadio').click(function () {
          var checkedradio = $('[name="gr"]:radio:checked').val();
          $("#sel").html("Selected Value: " + checkedradio);
      });
    });
   </script>-->
<div class="col-md-9 search_left">
  <form method="post" action="search_profile.php">
   <div class="form_but1">
	<label class="col-sm-5 control-lable1">Gender : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" class="radio_1" name="gender" value="Male" /> Male &nbsp;&nbsp;
		<input type="radio" class="radio_1" name="gender" value="Female" /> Female
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
   </div>
   <div class="form_but1">
    <label class="col-sm-5 control-lable1">Caste : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="caste" class="form-control">
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
    </div>
    <div class="clearfix"> </div>
   </div>
   <div class="form_but1">
    <label class="col-sm-5 control-lable1">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion" class="form-control">
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
    </div>
    <div class="clearfix"> </div>
   </div>
   <div class="form_but1">
    <label class="col-sm-5 control-lable1">State : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
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
			<option value="Jammu-Kashmir">Jammu-Kashmir</option>
			<option value="Uttar Pradesh">Uttar Pradesh</option>
			<option value="West Bengal">West Bengal</option>
		</select>
      </div>
    </div>
    <div class="clearfix"> </div>
   </div>
   <div class="form_but1">
    <label class="col-sm-5 control-lable1">Country : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
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
    </div>
    <div class="clearfix"> </div>
   </div>
   <div class="form-actions">
		<input type="submit" id="edit-submit" name="op" value="Search" class="btn_1 submit">
   </div>
  </form><br>
  <div class="paid_people">
   <h1>Paid People</h1>
   <div class="row_1">
	   <div class="col-sm-6 paid_people-left">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a5.jpg" class="img-responsive" alt=""/>
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
	   <div class="col-sm-6">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a6.jpg" class="img-responsive" alt=""/>
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
	   <div class="clearfix"> </div>
   </div>
   <div class="row_1">
	   <div class="col-sm-6 paid_people-left">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a7.jpg" class="img-responsive" alt=""/>
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
	   <div class="col-sm-6">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a8.jpg" class="img-responsive" alt=""/>
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
	   <div class="clearfix"> </div>
   </div>
   <div class="row_2">
	   <div class="col-sm-6 paid_people-left">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a5.jpg" class="img-responsive" alt=""/>
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
	   <div class="col-sm-6">
	 	<ul class="profile_item">
		  <a href="view_profile.html">
		   <li class="profile_item-img">
		   	  <img src="images/a4.jpg" class="img-responsive" alt=""/>
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
	   <div class="clearfix"> </div>
    </div>
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
        	  <a href="view_profile.html">
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
        	  <a href="view_profile.html">
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
        	  <a href="view_profile.html">
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
        	  <a href="view_profile.html">
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
?>	