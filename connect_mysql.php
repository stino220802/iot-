<?php 

	DEFINE ('DB_USER', ''); 
	DEFINE ('DB_PSWD',''); 
	DEFINE ('DB_HOST',''); 
	DEFINE ('DB_NAME',''); 
	
	$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME); 
	
	if(!dbcon){
		die('error connecting to database'); 
	}
	
	echo 'you have connected successfully'; 
		
	
?> 