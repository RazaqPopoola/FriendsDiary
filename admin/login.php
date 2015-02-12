<?php

	//Start session
	session_start();
	
	//Database connection
	include('../config/connection.php'); 
	
	if($_POST){
		
		$query = "SELECT * FROM members WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
		$result = mysqli_query($dbc, $query);
	
		if(mysqli_num_rows($result) == 1){
			
			$_SESSION['username'] = $_POST['email'];
			header('Location: index.php');
		}
		
	}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
	</head>
	
	<body>
		<div id="wrap">
			<?php //include(D_TEMPLATE.'/navigation.php'); ?>
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-4 col-md-offset-4">
							<div class="panel panel-info">
								<div class="panel-heading">
									<strong>Login</strong>
								</div><!--- End panel heading -->	
								<div class="panel-body">

									<form action="login.php" method="post" role="form">
									  <div class="form-group">
									    <label for="email">Email address</label>
									    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
									  </div>
									  <div class="form-group">
									    <label for="password">Password</label>
									    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
									  </div>
									 
									 <!---
									  <div class="checkbox">
									    <label>
									      <input type="checkbox"> Check me out
									    </label>
									  </div>-->
									  <button type="submit" class="btn btn-default">Submit</button>
									</form>
								</div><!--- End panel body -->	
							</div>	<!--- End panel-->	
						</div><!--- End Col-->
		
					</div><!--- End Row -->
					
					
					
				</div><!--- End container -->	
		</div><!--- End wrap -->
			
		<?php //include(D_TEMPLATE.'/footer.php'); ?>
		
		<?php //if($debug == 1) { include('widget/debug.php'); }	?>
		
	</body>
</html>