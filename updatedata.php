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
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$id=$_POST['id'];
$sql = "UPDATE `user` SET `name` = '$name', `email` = '$email', `password` = '$password', `gender` = '$gender' WHERE `user`.`id` = '$id'";
//INSERT INTO your table name (your table field name) VALUES (VALUES)
$conn->query($sql);
?>