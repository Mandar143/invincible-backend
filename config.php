<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "tendulkar";
 $db  	 = "invincible";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

?>
