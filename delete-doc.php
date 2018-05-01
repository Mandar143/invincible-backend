<?php
include('header.php');
include('config.php');

if(isset($obj)){

	$client_id=$obj->category_id;
	$query="delete from category_document where category_id=".$client_id;
	if(mysqli_query($conn,$query)){
		$abc= 	"Record Deleted Successfully";
		echo json_encode($abc);
		exit;
	}
	else{
		echo mysql_error($err);
	}
	mysqli_close($con);
}
?>
