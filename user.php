<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head> 
<body>
<div class="row">
	<h1 class="text-center">Manage User</h1>
</div>
	<table class="table table-bordered">
    <tr>
      <td>User Name</td>
      <td>Password</td>
      <td>Full Name</td>
      <td>Email</td>
      <td>Dept</td>
      <td>User Type</td>
	  <td>Action</td>
    </tr>
    
		<?php
			/**
			* 
			* connection with database
			* 
			*/
				$db_host = 'localhost';
				$db_user = 'root';
				$db_password = '';
				$db_name ='librarymanagement';
				
				$location = mysql_pconnect($db_host, $db_user, $db_password);
				
				if (!$location) 
				{
					die('Not connected : ' . mysql_error());
				}                
				$db_selected = mysql_select_db($db_name, $location);
				if (!$db_selected) 
				{
					die ('Error : ' . mysql_error());
				}
				$query = "SELECT * FROM register";
			
				$result = mysql_query($query,$location);
				
				
				while ($row = mysql_fetch_array($result)){
					echo "<tr>
						<td>$row[username]</td>
						<td>$row[password]</td>
						<td>$row[fullname]</td>
						<td>$row[email]</td>
						<td>$row[dept]</td>
						<td>$row[type]</td>
						<td>
							<a href = 'delete.php?asdfg=$row[id]'>Delete</a>
							<a href = 'update.php?id=$row[id]'>Update</a>
						<td>	
						</tr>";
				}
		?>
	</table>
</body>
</html>