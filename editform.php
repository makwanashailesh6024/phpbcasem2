<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "newdatabase"; 
$id=$_GET['id'];
$conn =mysqli_connect($host, $user, $password, $database);// Hostname,user,password,database

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select * from user where id=".$id;
$data=$conn->query($sql);
$resultdata=$data->fetch_all(MYSQLI_ASSOC);?>
<h2>Update User</h2>
<form method="post" action="http://localhost/updatedata.php">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $resultdata[0]['name'];?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $resultdata[0]['email'];?>" required><br><br>
	 <label>Id:</label><br>
    <input type="text" name="id" value="<?php echo $resultdata[0]['id'];?>" required><br><br>

 <label>Password:</label><br>
    <input type="password" value="<?php echo $resultdata[0]['password'];?>"  name="password" required><br><br>
    <label>Gender:</label><br>
    <input type="radio" value="Male" name="gender" <?php if($resultdata[0]['gender']=='Male'){ echo "checked";}?> value="Male" required> Male
    <input type="radio" name="gender"  <?php if($resultdata[0]['gender']=='Female'){ echo "checked";}?> value="Female" value="Female" required> Female

    <br><br>

    <input type="submit" value="Update">
</form>