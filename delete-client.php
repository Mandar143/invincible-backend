<?php
include('header.php');
include('config.php');

if(isset($obj)){

	$client_id=$obj->client_id;
	//echo $client_id;
	//exit;
	$query="delete from clients where client_id=".$client_id;
	//echo $query;
	//exit;
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
