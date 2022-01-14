
<?php 
	//$conn
	include('connect_mysql.php'); 
	
	
	//get data from future_proof table
	$sql = "SELECT * FROM  future_proof";
	$result = mysqli_query($conn, $sql); 
	
	$data = array(); 
	
	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row; 
	}
	
	echo json_encode($data);
	
	
?>
