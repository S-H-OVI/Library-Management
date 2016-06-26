<!DOCTYPE html>
<html>
<head>
<title>Regitration Form</title>
<style>
#header {
    background-color:silver;
    color:white;
    text-align:center;
    padding:5px;
}
#section {
    padding:5px;
    text-align:center;
}
</style>
</head>
<body style="background-color:lightgrey;">
<div id="header">
<h2 style="color:black;">User Registration Form</h2>
</div>
<div id="section">
	<form action="way.php" method="post">
		Username:
		<input type="text" name="username"></br>
		Password:
		<input type="password" name="password"></br>
		Fullname
		<input type="text" name="fullname"></br>
		Email:
		<input type="email" name="email"></br>
		Dept:
		<input type="text" name="dept"><br>
		Type:
		<select name="type" class="form-control">
		<option value="Admin">Admin</option>
		<option value="Student">Student</option>
		</select>
		<br>
		<input type="submit">
	</form>
</div>
</body>
</html>