<?php
	if(isset($_COOKIE["login"])){
		$login_email=$_COOKIE["login"]; //email of login person
		include("db.php");
		if(isset($_REQUEST["id"])){
			$id=$_REQUEST["id"]; //id of the person to which login person is sending interest
			$user_email="";  //email of the person to which login person is sending interest
			$code="";  //code of the login person who is showing interest into user $id
			
			$rs=mysqli_query($conn,"select email from details where code='$id'");
			if($r=mysqli_fetch_array($rs)){
				$user_email=$r["email"];
			}
			
			$rs=mysqli_query($conn,"select code from details where email='$login_email'");
			if($r=mysqli_fetch_array($rs)){
				$code=$r["code"];
			}
			
			//email of login person AND code of in which login person is interested OR email of in which login person is interested AND code of login person
			if(mysqli_query($conn,"delete from interested where (email='$login_email' AND code='$id') OR (email='$user_email' AND code='$code')")>0){
				echo "success";
			}
		}	
	}		
?>