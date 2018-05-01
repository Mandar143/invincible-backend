<?php
include('header.php');
include('config.php');

if(isset($obj)){
	print_r($obj);
	$client_id=$obj->client_id;
	$category_id=$obj->category_id;
	$document_id=$obj->document_id;
	//$client_doc_id=$obj->client_doc_id;
	$count=sizeof($document_id[0]);
	//echo $count;
	for($j=0;$j<$count;$j++){
		
				
				$sql="INSERT INTO client_doc_category(client_id, category_id,document_id) VALUES ($client_id,$category_id[0][$j],$document_id[0][$j])";
			echo $document_id[0][$j]."<br/>";
			echo $sql."<br/>";
			echo $category_id[0][$j];
		
		}
	
		//echo $sql;
		
			if(mysqli_query($conn,$sql)){
		$abc= 	"Record Save Successfully";
		echo json_encode($abc);
		//exit;
	}
	else{
		echo mysql_error($err);
	}
	mysqli_close($con);	
	//echo $sql;
	//exit;
	
}



?>
