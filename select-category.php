<?php
include('header.php');
include('config.php');
if(isset($obj)){
	$category_id=$obj->category_id;
	$sql="select category_id,category_name from category_document where category_id=$category_id";
	}
	else{
		$sql="SELECT * FROM category_document WHERE 1";
	}
	$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    echo json_encode($rows);
?>
