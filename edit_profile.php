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
		$conn=mysqli_connect("localhost","root","","wed_web");
		$email=$_COOKIE["login"];
		$rs=mysqli_query($conn,"select * from details where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			?>
			<!DOCTYPE HTML>
			<html>
			<head>
			<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | View_profile :: w3layouts</title>
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
			<style>
				#alert-msg{
					display:none;
				}
			</style>
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
				$("#submit").click(function(){
					var fname=$("#fname").val();
					var lname=$("#lname").val();
					var dob=$("#dob").val();
					var gender=$("#gender").val();
					var caste=$("#caste").val();
					var religion=$("#religion").val();
					var occupation=$("#occupation").val();
					var city=$("#city").val();
					var state=$("#state").val();
					var country=$("#country").val();
					//alert(fname+" "+lname+" "+dob+" "+gender+" "+caste+" "+religion+" "+city+" "+occupation+" "+state+" "+country);
					$.post(
						"update_profile.php",{fname:fname,lname:lname,dob:dob,gender:gender,caste:caste,religion:religion,occupation:occupation,city:city,state:state,country:country},function(data){
							if(data=="success"){
								$("#alert-msg").attr("class","alert alert-success");
								$("#alert-msg").fadeIn(1000);
								$("#alert-msg").html("Profile Updated");
							}
							else{
								$("#alert-msg").attr("class","alert alert-danger");
								$("#alert-msg").fadeIn(1000);
								$("#alert-msg").html("Try Again");
							}
						}
					);
				});
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
					<li class="current-page">Edit Profile</li>
				 </ul>
			   </div>
			   <div class="profile">
				 <div class="col-md-8 profile_left">
					<h2>Profile Id : <?=$r["code"]?></h2>
					<div class="col_3">
						<div class="col-sm-4 row_2">
							<div class="flexslider">
								 <ul class="slides">
									<li data-thumb="image/<?=$r["code"]?>.jpg">
										<img src="image/<?=$r["code"]?>.jpg" />
									</li>
									
									<!--<li data-thumb="images/p2.jpg">
										<img src="images/p2.jpg" />
									</li>
									<li data-thumb="images/p3.jpg">
										<img src="images/p3.jpg" />
									</li>
									<li data-thumb="images/p4.jpg">
										<img src="images/p4.jpg" />
									</li>-->
								 </ul>
							  </div>
						</div>
						<div class="col-sm-8 row_1">
							<div id="alert-msg" class="alert alert-danger">
								
							</div>
								<div class="form-group">
								  <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
								  <input type="text" id="fname" value="<?=$r["fname"]?>" class="form-text required" required="required">
								</div>
								<div class="form-group">
								  <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
								  <input type="text" id="lname" value="<?=$r["lname"]?>" class="form-text required" required="required">
								</div>
								<div class="age_select">
								  <label for="edit-age">DOB <span class="form-required" title="This field is required.">*</span></label>
								  <input type="date" id="dob" value="<?=$r["birth"]?>" class="form-control" required="required">
									  <div class="clearfix"> </div>
								</div>
								<div class="form-group form-group1">
									<label class="col-sm-7 control-lable" for="sex">Gender : </label>
									<div class="col-sm-5">
										<input type="radio" id="gender" <?php echo ($r["gender"] == 'Male')? 'checked' : '';?> value="Male">Male
										<input type="radio" id="gender" <?php echo ($r["gender"] == 'Female')? 'checked' : '';?> value="Female">Female
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="form-group">
									<label class="edit-caste">Caste<span class="form-required" title="This field is required.">*</span></label>
									<select id="caste" class="form-control" required="required">
										<option value="<?=$r["caste"]?>"><?=$r["caste"]?></option>
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
									<select id="religion" class="form-control" required="required">
										<option value="<?=$r["religion"]?>"><?=$r["religion"]?></option>
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
								  <input type="text" id="occupation" value="<?=$r["occupation"]?>" class="form-text required" required="required">
								</div>
								<div class="form-group">
									<label class="edit-city">City<span class="form-required" title="This field is required.">*</span></label>
									<select id="city" class="form-control" required="required">
										<option value="<?=$r["city"]?>"><?=$r["city"]?></option>
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
									<select id="state" class="form-control" required="required">
										<option value="<?=$r["state"]?>"><?=$r["state"]?></option>
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
										<option value="Madhya Pradesh">Madhya Pradesh</option>
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
								<div class="form-group">
									<label class="edit-country">Country<span class="form-required" title="This field is required.">*</span></label>
									<select id="country" class="form-control" required="required">
										<option value="<?=$r["country"]?>"><?=$r["country"]?></option>
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
								<div class="form-actions">
									<button id="submit" class="btn btn-danger">Update</button>
								</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col_4">
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
							  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
							  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
							  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
						   </ul>
						   <div id="myTabContent" class="tab-content">
							  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								
								<div class="basic_1">
									<h3>Basics & Lifestyle</h3>
									<div class="col-md-6 basic_1-left">
									  <table class="table_working_hours">
										<tbody>
											<tr class="opened_1">
												<td class="day_label">Name :</td>
												<td class="day_value"><?=$r["fname"]?>&nbsp;<?=$r["lname"]?></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Marital Status :</td>
												<td class="day_value">Single</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Body Type :</td>
												<td class="day_value">Average</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Marital Status :</td>
												<td class="day_value">Single</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Height :</td>
												<td class="day_value">28, 5ft 5in / 163cm</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Physical Status :</td>
												<td class="day_value closed"><span>Not Specified</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Profile Created by :</td>
												<td class="day_value closed"><span>Self</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Drink :</td>
												<td class="day_value closed"><span>No</span></td>
											</tr>
										</tbody>
									  </table>
									 </div>
									 <div class="col-md-6 basic_1-left">
									  <table class="table_working_hours">
										<tbody>
											<tr class="opened_1">
												<td class="day_label">Age :</td>
												<td class="day_value">28 Yrs</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Mother Tongue :</td>
												<td class="day_value">Hindi</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Complexion :</td>
												<td class="day_value">Fair</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Weight :</td>
												<td class="day_value">45</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Blood Group :</td>
												<td class="day_value">B+</td>
											</tr>
											<tr class="closed">
												<td class="day_label">Diet :</td>
												<td class="day_value closed"><span>Non-Veg</span></td>
											</tr>
											<tr class="closed">
												<td class="day_label">Smoke :</td>
												<td class="day_value closed"><span>No</span></td>
											</tr>
										</tbody>
									</table>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="basic_1">
									<h3>Religious / Social & Astro Background</h3>
									<div class="col-md-6 basic_1-left">
									  <table class="table_working_hours">
										<tbody>
											<tr class="opened">
												<td class="day_label">Time of Birth :</td>
												<td class="day_value">Not Specified</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Caste :</td>
												<td class="day_value"><?=$r["caste"]?></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Date of Birth :</td>
												<td class="day_value closed"><span><?=$r["birth"]?></span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Place of Birth :</td>
												<td class="day_value closed"><span>Not Specified</span></td>
											</tr>
										 </tbody>
									  </table>
									 </div>
									 <div class="col-md-6 basic_1-left">
									  <table class="table_working_hours">
										<tbody>
											<tr class="opened_1">
												<td class="day_label">Religion :</td>
												<td class="day_value"><?=$r["religion"]?></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Sub Caste :</td>
												<td class="day_value">Not Specified</td>
											</tr>
										</tbody>
									</table>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="basic_1 basic_2">
									<h3>Education & Career</h3>
									<div class="basic_1-left">
									  <table class="table_working_hours">
										<tbody>
											<tr class="opened">
												<td class="day_label">Education   :</td>
												<td class="day_value">Engineering</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Education Detail :</td>
												<td class="day_value">Software Engineer</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Occupation Detail :</td>
												<td class="day_value closed"><span><?=$r["occupation"]?></span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Annual Income :</td>
												<td class="day_value closed"><span>Rs.5,00,000 - 6,00,000</span></td>
											</tr>
										 </tbody>
									  </table>
									 </div>
									 <div class="clearfix"> </div>
								</div>
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
								<div class="basic_3">
									<h4>Family Details</h4>
									<div class="basic_1 basic_2">
									<h3>Basics</h3>
									<div class="col-md-6 basic_1-left">
									  <table class="table_working_hours">
										<tbody>
											<tr class="opened">
												<td class="day_label">Father's Occupation :</td>
												<td class="day_value">Not Specified</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Mother's Occupation :</td>
												<td class="day_value">Not Specified</td>
											</tr>
											<tr class="opened">
												<td class="day_label">No. of Brothers :</td>
												<td class="day_value closed"><span>Not Specified</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">No. of Sisters :</td>
												<td class="day_value closed"><span>Not Specified</span></td>
											</tr>
										 </tbody>
									  </table>
									 </div>
								   </div>
								</div>
							 </div>
							 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
								<div class="basic_1 basic_2">
								   <div class="basic_1-left">
									  <table class="table_working_hours">
										<tbody>
											<tr class="opened">
												<td class="day_label">Age   :</td>
												<td class="day_value">28 to 35</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Marital Status :</td>
												<td class="day_value">Single</td>
											</tr>
											<tr class="opened">
												<td class="day_label">Body Type :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Complexion :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Height 5ft 9 in / 175cm :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Diet :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Kujadosham / Manglik :</td>
												<td class="day_value closed"><span>No</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Religion :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Caste :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Mother Tongue :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Education :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Occupation :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Country of Residence :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">State :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
											<tr class="opened">
												<td class="day_label">Residency Status :</td>
												<td class="day_value closed"><span>Doesn't matter</span></td>
											</tr>
										 </tbody>
									  </table>
									</div>
								 </div>
							 </div>
						 </div>
					  </div>
				   </div>
				 </div>
				 <div class="col-md-4 profile_right">
					<div class="newsletter">
					   <form>
						  <input type="text" name="ne" size="30" required="" placeholder="Enter Profile ID :">
						  <input type="submit" value="Go">
					   </form>
					</div>
					<div class="view_profile">
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
				   <div class="view_profile view_profile1">
						<h3>Members who viewed this profile also viewed</h3>
						<ul class="profile_item">
						  <a href="#">
						   <li class="profile_item-img">
							  <img src="images/p9.jpg" class="img-responsive" alt=""/>
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
							  <img src="images/p10.jpg" class="img-responsive" alt=""/>
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
							  <img src="images/p11.jpg" class="img-responsive" alt=""/>
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
							  <img src="images/p12.jpg" class="img-responsive" alt=""/>
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
			<script defer src="js/jquery.flexslider.js"></script>
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
			<script>
			// Can also be used with $(document).ready()
			$(window).load(function() {
			  $('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			  });
			});
			</script>   
			</body>
			</html>
			<?php
		}
		else{
			header("location:login.php?again=1");
		}
	}
?>	