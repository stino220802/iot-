

<?xml version='1.0' encoding='UTF-8'?>
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
include('db.sql');
$sql = "SELECT * FROM RSS_FEED ORDER BY id "; 
$query = mysql_query($sql);

header("Content-type: text/xml"); 

echo "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title> RSS feed</title>
<link> http://12001732.pxl-ea-ict.be/ </link>
<description>RSS feed iot </description>
<language>en-us</language>"; 

while($row = mysql_fetch_array($query))
{
$sensor_id=$row['sensor_id']; 
$value=$row['value']; 
$timestamp=$row['timestamp']; 

echo "<item>
<title>$sensor_id</title>
<value>$value</value>
<timestamp>$timestamp</timestamp>
</item>"; 
} 
echo "</channel></rss>"; 
?>
  
</body>

</channel>
</rss>
