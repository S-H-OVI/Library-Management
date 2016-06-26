<!DOCTYPE html>
<html>
<head>
<title>Add Book Information</title>
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
<h2 style="color:black;">Add Book Information</h2>
</div>
<div id="section">
	<form action="info.php" method="post">
		Book Name:
		<input type="text" name="username"></br>
		Author:
		<input type="password" name="password"></br>
		ISBN No:
		<input type="text" name="fullname"></br>
		Barcode No:
		<input type="email" name="email"></br>
		Edition:
		<input type="text" name="dept"><br>
		Publisher:
		<input type="text" name="dept"><br>
		Copies:
		<input type="int" name="dept"><br>
		<br>
		<input type="submit">
	</form>
</div>
</body>
</html>