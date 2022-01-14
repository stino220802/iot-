<?php
$servername = "localhost";
$username = "student_12001732";
$password = "n15UwnfzVK9L";
$dbname = "student_12001732";  

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
//echo 'you have connected successfully'; 
?>