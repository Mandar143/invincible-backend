<?php
include('header.php');
include('config.php');
if(isset($obj)){
	$document_id=$obj->document_id;
	$category_id=$obj->category_id;
	if(isset($document_id)){
		$sql="select d.document_id,cd.category_id,d.dname from category_document as cd inner join document as d on cd.category_id=d.category_id and document_id=$document_id";	
	}
	else{
		$sql="select d.document_id,d.dname from category_document as cd inner join document as d on cd.category_id=d.category_id and d.category_id=$category_id";
	}
	
	}
	else{
		$sql="select d.document_id,cd.category_name,d.dname from category_document as cd inner join document as d on cd.category_id=d.category_id";
	}
	$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
        
    }
    echo json_encode($rows);
?>
