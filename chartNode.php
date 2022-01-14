<html> 
<head> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head> 
<body> 

<script> 

var jsonData = $.ajax({
	url: "JSONencodeSendToJsAPI.php", 
	dataType:"json", 
	async: false
}).responseText; 

const obj = JSON.parse(jsonData);
//obj.created_at = new Date(obj.created_at);
for(var i = 0; i < obj.length; i++){
console.log(obj[i].sensor_id); 
console.log(obj[i].value); 
console.log(obj[i].created_at); 
}
</script> 
</body> 
</html>

