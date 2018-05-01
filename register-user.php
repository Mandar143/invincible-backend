<?php
include('header.php');
include('config.php');
if(isset($obj)){
	
	$user_email=$obj->user_email;
	$password=$obj->password;
	$role=$obj->role;
	$sql="INSERT INTO register_user(user_email,password,role,display) VALUES ('$user_email','$password','$role','Y')";

	if(mysqli_query($conn,$sql)){
		$abc= 	"Record Save Successfully";
		echo json_encode($abc);
		exit;
	}
	else{
		echo mysql_error($err);
	}
	mysqli_close($con);
}
?>
