<?php

	include('connect_mysql.php'); 
	
	
	if(isset($_POST['submit'])){

		if(!empty($_POST['sensor_id']) && !empty($_POST['value'])){
		
			$sensor_id = $_POST['sensor_id'];
			$value = $_POST['value'];
			
			$query = "insert into future_proof(sensor_id,value) values('$sensor_id', '$value')"; 
			$run = mysqli_query($conn, $query) or die(mysqli_error());
			
			if($run){
				echo"submitted succesfully";
			}
			else{
				echo"not submitted";
			}
			
		}
		else{
			echo"alle velden invullen"; 
		}
		
		
	}
	
	
	
	
	
		if(!empty($_POST["id_sensor"]) && !empty($_POST["naam"]) && !empty($_POST["sensor_value"])){
			$sensor = $_POST["id_sensor"];
			$name = $_POST["naam"];
			$waarde = $_POST["sensor_value"];
			if($waarde > 100){
				$waarde = $waarde / 10;
			}
			// get external ip address
			$ip_addres = $_SERVER['REMOTE_ADDR'];
						//$ip_addres = "192.00.00"

			//delete previous instance of sensor
			$sql2 = "DELETE FROM lastknown WHERE ID = '$sensor'";
			$res = mysqli_query($conn, $sql2) or die("Failed".mysql_error()); 
				
			// put data into future proof table 	
			$sql3 = "insert into future_proof(sensor_id, value) values('$sensor', '$waarde')";
			$run = mysqli_query($conn, $sql3) or die(mysqli_error());
			$ip_addres = "109.130.51.72";
			// put data into lastknown table
			$sql4 = "insert into lastknown(ID, name, external_ip) values('$sensor', '$name', '$ip_addres')";
			$run2 = mysqli_query($conn, $sql4) or die (mysqli_error($conn)); 
		}
	
	

?>
