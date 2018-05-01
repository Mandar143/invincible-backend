<?php
include('header.php');
include('config.php');

if(isset($obj)){

	$cname=$obj->cname;
	$client_date=$obj->client_date;
	$paddress=$obj->paddress;
	$saddress=$obj->saddress;
	$city=$obj->city;
	$zipcode=$obj->zipcode;
	$phonenumber=$obj->phonenumber;
	$mnumber=$obj->mnumber;
	$email=$obj->email;
	$aemail=$obj->aemail;
	$waddr=$obj->waddr;
	$client_id=$obj->client_id;

	//echo 'phone'.$obj->phonenumber;

    if(isset($phonenumber)){
    	$phonenumber=1;
    	//echo 'phone'.$phonenumber;
    }
    else{
    	//echo "Sdasd";
    	//exit;
    }
   
	if(isset($client_id)){

	  $sql="UPDATE clients SET cname='$cname',client_date='$client_date',paddress='$paddress',saddress='$saddress',city='$city',zipcode='$zipcode',phonenumber=$phonenumber,mnumber=$mnumber,email='$email',aemail='$aemail',waddr='$aemail',cli_status=1 WHERE client_id=$client_id";
	 
	}
	else{
	$sql="INSERT INTO clients(cname,client_date, paddress, saddress, city, zipcode, phonenumber, mnumber, email, aemail, waddr, cli_status) VALUES ('$cname','$client_date','$paddress','$saddress','$city','$zipcode',$phonenumber,$mnumber,'$email','$aemail','$waddr',1)";
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
