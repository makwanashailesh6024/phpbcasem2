<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "newdatabase"; // તમારે તમારા ડાટાબેઝ નું નામ લખવું

$conn =mysqli_connect($host, $user, $password, $database);// Hostname,user,password,database

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['id'];
$sql="DELETE FROM user WHERE id='$id'";
$data=$conn->query($sql);

