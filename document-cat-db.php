<?php
include('header.php');
include('config.php');
if(isset($obj)){
	$cname=$obj->category_name;
	$category_id=$obj->category_id;
	if(isset($category_id)){
	  $sql="UPDATE category_document SET category_name='$cname' WHERE category_id=$category_id";
	}
	else{
	$sql="INSERT INTO category_document(category_name, user_code,display) VALUES ('$cname',1,'Y')";
	}
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
