<?php
	if(isset($_COOKIE["login"])){
		$email=$_COOKIE["login"];
		if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["dob"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["caste"]) && isset($_REQUEST["religion"]) && isset($_REQUEST["occupation"]) && isset($_REQUEST["city"]) && isset($_REQUEST["state"]) && isset($_REQUEST["country"])){
			$fname=$_REQUEST["fname"];
			$lname=$_REQUEST["lname"];
			$dob=$_REQUEST["dob"];
			$gender=$_REQUEST["gender"];
			$caste=$_REQUEST["caste"];
			$religion=$_REQUEST["religion"];
			$occupation=$_REQUEST["occupation"];
			$city=$_REQUEST["city"];
			$state=$_REQUEST["state"];
			$country=$_REQUEST["country"];
			$conn=mysqli_connect("localhost","root","","wed_web");
			if(mysqli_query($conn,"update details set fname='$fname',lname='$lname',birth='$dob',gender='$gender',caste='$caste',religion='$religion',occupation='$occupation',city='$city',state='$state',country='$country' where email='$email'")>0){
				echo "success";
			}
			else{
				echo "again";
			}
		}
	}
?>