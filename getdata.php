<h1>reg data</h1>
<table border="2">
<tr>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "newdatabase"; 

$conn =mysqli_connect($host, $user, $password, $database);// Hostname,user,password,database

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select * from user";
$data=$conn->query($sql);
$resultdata=$data->fetch_all(MYSQLI_ASSOC);
foreach($resultdata as $newdata){
?>

<tr>
<td><?php echo $newdata['name'];?></td>
<td><?php echo $newdata['email'];?></td>
<td><?php  echo $newdata['password'];?></td>
<td><?php echo $newdata['gender'];?></td>
<td><a href="/editform.php?id=<?php echo $newdata['id'];?>">Edit</a></td>
<td><a href="/delete.php?id=<?php echo $newdata['id'];?>">Delete</a></td>
</tr>


<?php } ?>
</table>