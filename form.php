<!-- HTML Form -->
<h2>Insert User</h2>
<form method="post" action="http://localhost/insertdata.php">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

 <label>Password:</label><br>
    <input type="password" name="password" required><br><br>
    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female

    <br><br>

    <input type="submit" value="Insert">
</form>