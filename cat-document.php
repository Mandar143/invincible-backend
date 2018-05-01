<?php
include('header.php');
include('config.php');

if(isset($obj)){
	
	$category_id=$obj->category_id;
	$document_id=$obj->document_id;
	$dname=$obj->dname;
	
	if(isset($document_id)){
	  $sql="UPDATE document SET category_id=$category_id,dname='$dname' WHERE document_id=$document_id";
	}
	else{
	$sql="INSERT INTO document(category_id,dname,display) VALUES ($category_id,'$dname','Y')";
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
