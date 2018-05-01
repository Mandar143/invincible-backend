<?php
include('header.php');
include('config.php');
if(isset($obj)){

	$user_email=$obj->user_email;
	$password=$obj->password;
	
		$sql="select count(*) as user_count from register_user where user_email='$user_email' and password='$password'";

	$result = mysqli_query($conn, $sql);
	//print_r($result);
	  while($row = mysqli_fetch_assoc($result))
    {
    	if($row['user_count']>0){
    		$arr=array(
    			"status"=>200,
    			"success"=>"Login Successfully"
    		);
    	}
    	else{
    		$arr=array(
    			"status"=>500,
    			"success"=>"Not Login Successfully"
    		);	
    	}
    }
    echo json_encode($arr);
    exit;
}

?>
