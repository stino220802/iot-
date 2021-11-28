<?php

if (isset($_POST['submitted'])){
	
	include('connect_mysql.php'); 
	
	$sid = $_POST['sid']; 
	$value = $_POST['value']; 
	//$time = CURRENT_TIMESTAMP();
	$sqlinsert = "INSERT INTO future_proof (sensor_id, value) VALUES ('$sid', '$value')"; 
	
	if(!mysqli_query($dbcon, $sqlinsert)){
		die('error inserting new record');		
	}
	
	$newrecord = "1 record added to the database"; 
}



?>



<html> 
<head> 
<title>Insert data into DB</title> 
</head> 
<body> 


<h1> Insert data into DB</h1> 

<form method="post" action="insert-data.php"> 
<input type="hidden" name="submitted" value="true"/> 
<fieldset>
	<legend>New sensor data</legend> 
	<label>sensor id:<input type="text" name="sid" /></label>
	<label>value:<input type="number" name="value" min="0" max="a"/></label>
</fieldset> 
<br/> 
<input type="submit" value="add new person" /> 


</form>
<?php
echo $newrecord
?>
</body> 
</html>  