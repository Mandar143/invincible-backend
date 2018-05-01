<?php
include('header.php');
include('config.php');

if(isset($obj)){
	$client_id=$obj->client_id;
	if(isset($client_id)){
		$query = "SELECT * FROM clients where client_id=$client_id";	
	}
}
else{
		$query = "SELECT * FROM clients ";	
	}

$result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    echo json_encode($rows);
    exit;
?>
