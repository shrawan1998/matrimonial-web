<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	if(!isset($_COOKIE["login"])){
		header("location:login.php?cookie_error=1");
	}
	else{
		if(isset($_REQUEST["pattern"])){
			include("db.php");
			$pattern=$_REQUEST["pattern"];
			$email=$_COOKIE["login"];
			$sql="";
			$code="";
			$rss=mysqli_query($conn,"select code from details where email='$email'");
			if($rec=mysqli_fetch_array($rss)){
				$code=$rec[0];
			}
			if($pattern=="interested"){
				$sql="select * from details where code IN(select code from interested where email='$email')";
			}
			else{
				$sql="select * from details where email IN(select email from interested where code='$code')";
			}
			$flag=0;
			$rs=mysqli_query($conn, $sql);
			while($r=mysqli_fetch_array($rs)){
				$flag=1;
				?>
				<div class="profile_top" style="margin-top:10px" id="r<?=$r["code"]?>"><a href="user_profile.php?id=<?=$r["code"]?>">
					<div class="col-sm-3 profile_left-top">
						<img src="image/<?=$r["code"]?>.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="col-sm-2">
					  <ul class="login_details1">
						 
					  </ul>
					</div>
					<div class="col-sm-6">
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
								
							</tbody>
						</table>
					   <div class="buttons">
						   <div class="vertical"><a style="color:white" href="user_profile.php?id=<?=$r["code"]?>">View Profile</a></div>
						   
						   <div class="vertical"><span class="remove" id="<?=$r["code"]?>">Remove</span></div>
					   </div>
					</div>
					<div class="clearfix"> </div>
				</a></div> 
				<?php
			}
			if($flag==0){
				?>
				<div class="profile_top">
					<div class="col-sm-3 profile_left-top">
					
					</div>
					<div class="col-sm-2">
					  <ul class="login_details1">
						 
					  </ul>
					</div>
					<div class="col-sm-6">
						<h3 style="color:red">Record Not Found!!</h3>
					</div>
				</div>
				<?php
			}
		}
	}
?>