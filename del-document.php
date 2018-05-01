<?php
include('header.php');
include('config.php');

if(isset($obj)){

	$client_id=$obj->document_id;
	$query="delete from document where document_id=".$client_id;
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
