
<rss version='2.0'>
<channel>

<title>iot</title>
<link>12001732.pxl-ea-ict.be</link>
<description>iot project</description>
<language>en-us</language>

<item>
<title>Item/Article Title</title>
<link>Item/Article URL</link>
<description>Items/Article description</description>
</item>
<body> 
  <h1> RSS feed </h1> 
  
  <?php
include('connect_mysql.php');
$sql = "SELECT * FROM future_proof ORDER BY created_at"; 
$query = mysqli_query($conn, $sql);

//header("Content-type: text/xml"); 

echo "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title> RSS feed</title>
<link> http://12001732.pxl-ea-ict.be/ </link>
<description>RSS feed iot </description>
<language>en-us</language>"; 
echo nl2br(" \n \r\n");


echo "<table border='1'>

<tr>

<th>sensor_id</th>

<th>value</th>

<th>timestamp</th>

<th>24h average</th> 

<th> minimum value</th> 

<th> maximum value</th> 

</tr>";


$day = 0;  
$sensor_id1 = 1; 
$sensor_id2 = 2; 	
$minValueS1 = 0; 
$minValueS2 = 0; 
$maxValueS1 = 0; 
$maxValueS2 = 0; 

while($row = mysqli_fetch_array($query))
{
$echoMinValue = 0;
$echoMaxValue = 0;
$average_sensor1;
$average_sensor2;
$echoAverage;
$sensor_id=$row['sensor_id']; 
$value=$row['value']; 
$timestamp=$row['created_at']; 
$currentDay = $timestamp; 
$currentDay2 = substr($currentDay, 8); 
$currentDay3 = substr($currentDay2, 0, -9); 

if($currentDay3 > $day){
	$day = $currentDay3;
	$average_sensor1 = 0;
	$average_sensor2 = 0; 
}
if($sensor_id1 == $sensor_id){
	if($average_sensor1 == 0){
		$average_sensor1 = $value;
	}
	if($minValueS1 == 0){
		$minValueS1 = $value;
		
		
	}
	if($minValueS1 > $value){
		$minValueS1 = $value; 
		
	}
	if($maxValueS1 < $value){
		$maxValueS1 = $value; 
	}
	//echo $minValueS1; 
	//echo $maxValueS1; 
	$average_sensor1 = $average_sensor1 + $value; 
	$average_sensor1 = $average_sensor1 / 2;
	$echoAverage = $average_sensor1;
	$echoMinValue = $minValueS1; 
	$echoMaxValue = $maxValueS1; 
}
if($sensor_id2 == $sensor_id){

	if($average_sensor2 == 0){
		$average_sensor2 = $value;
	}
	if($minValueS2 == 0){
		$minValueS2 = $value;
	}
	if($minValueS2 > $value){
		$minValueS2 = $value; 
	}
	if($maxValueS2 < $value){
		$maxValueS2 = $value; 
	}
	$average_sensor2 = $average_sensor2 + $value; 
	$average_sensor2 = $average_sensor2 / 2;
	$echoAverage = $average_sensor2;
	$echoMinValue = $minValueS2; 
	$echoMaxValue = $maxValueS2; 
}





  echo "<tr>";

  echo "<td>" . $sensor_id. "</td>";

  echo "<td>" . $value. "</td>";

  echo "<td>" . $timestamp. "</td>";
  
  echo "<td>" . $echoAverage. "</td>"; 
  
  echo "<td>" . $echoMinValue. "</td>"; 
  
  echo "<td>" . $echoMaxValue. "</td>"; 

  echo "</tr>";

} 
echo "</table>";



echo "</channel></rss>"; 
?>
  
</body>

</channel>
</rss>
