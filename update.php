<html ng-app="myApp"> 
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>   
  <body >

<?php
	
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
	
	$id = $_GET['id'];
	$query = "select * FROM register WHERE id = $id";	
	$result = mysql_query($query,$location);
	$row = mysql_fetch_array($result);
?>
    
<div class="row">
	<h1 class="text-center">Update User: <?php echo $row['username'];?></h1>

	<div class="col-sm-2"></div>
		
	<div class="col-sm-8">
		
		<form class="form-horizontal" action="update_register.php" method="post">
			<input type = "hidden" name ="register[id]" value ="<?php echo $row['id'];?>"/>
			<div class="form-group field-register-username required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="register-username" class="control-label">Username</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="text" value="<?php echo $row['username'];?>" maxlength="50" name="register[username]" class="form-control" id="register-username" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>	
			
			
			<div class="form-group field-register-email required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="register-email" class="control-label">Email</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="email" value="<?php echo $row['email'];?>" maxlength="50" name="register[email]" class="form-control" id="register-email" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>		

			<div class="form-group field-register-fullname required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="register-fullname" class="control-label">Fullname</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="text" value="<?php echo $row['fullname'];?>" maxlength="100" name="register[fullname]" class="form-control" id="register-fullname" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>			
			
			
			
			<div class="form-group field-register-dept required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="register-dept" class="control-label">Dept</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<input type="text" value="<?php echo $row['dept'];?>" maxlength="100" name="register[dept]" class="form-control" id="register-address" required>
				
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>
			
			<div class="form-group field-register-type required">
				<label class="col-xs-4 col-sm-3 col-md-2 col-lg-3 control-label">
				<label for="register-type" class="control-label">User Type</label></label>
				<div class="col-xs-8 col-sm-7 col-md-5 col-lg-6">
					<select name="register[type]" class="form-control" id="register-user_type">
					<option value="">Select</option>
					<option value="Admin"  <?php  if($row['type']=='Admin') echo 'selected';?> >Admin</option>
					<option value="Student"  <?php  if($row['type']=='Student') echo 'selected';?> >Student</option>
					</select>
				</div>

				<div class="col-xs-6 col-sm-5 col-md-3 col-lg-3">
					<div class="help-block"></div>
				</div>
			</div>				
			
			<div class="form-group text-center">
				<button type="submit" class="btn btn-default">Update</button>
			</div>
		</form>
		<br />
	
	</div>
	
	<div class="col-sm-2"></div>
</div>
    
  </body>
</html>
