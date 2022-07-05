<?php
	if(isset($_POST["email"]) || isset($_POST["pass"])){
		$conn=mysqli_connect("localhost","root","","wed_web");
		$email=$_POST["email"];
		$pass=$_POST["pass"];
		$rs=mysqli_query($conn,"select * from details where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if($pass==$r["password"]){
				setcookie("login",$email,time()+3600);
				header("location:view_profile.php");
			}
			else{
				header("location:login.php?incorrect_pass=1");
			}
		}
		else{
			header("location:login.php?incorrect_email=1");
		}
	}
	else{
		header("location:login.php?empty=1");
	}
?>