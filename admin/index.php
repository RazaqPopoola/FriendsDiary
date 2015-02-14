
<?php 
	#start the session
	session_start();
	
	if(!isset($_SESSION['username'])){
		
		hearder('Location: login.php');
	}


?>

<?php include('config/setup.php'); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $page['title']. '|'.$site_title ?> | ></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
	</head>
	
	<body>
		<div id="wrap">
			<?php include(D_TEMPLATE.'/navigation.php'); ?>
				
				<i class=" fa fa-fax fax 5x"></i>
				<i class="fa fa-university"></i>
				<hl>Admin Dashboard</hl>
				
				<div class="row">
 					 <div class="col-md-3">
 					 	<div class="list-group">
 					 		
	 					 	<?php 
	 					 		$query = "SELECT * FROM pages ORDER BY title ASC"; 
	 					 		$result = mysqli_query($dbc, $query);
	 					 		
	 					 		while($page_list = mysqli_fetch_assoc($result)) { 
	 					 			
	 					 				$blurb = substr($page_list['body'], 0, 160);
	 					 			?>
	 					 				
		 					 		<a class="list-group-item" href="#">
										<h4 class=List-group-item-heading"><?php echo $page_list['title']; ?></h4>
										<p class="list-group-item-text"><?php echo strip_tags($blurb) ?></p>
		 					 		</a>
	 					 	<?php } ?>
 					 	</div>
 					</div>
 					 <div class="col-md-9">
 					 	
 					 	<?php
 					 	
 					 		if(isset($_POST['submitted']) == 1){
 					 			
								$query ="INSET INTO pages(title, label, header, body) VALUES ('$_POST[title]', '$_POST[label]', '$_POST[header]', '$_POST[body]')";
								$result = mysqli_query($dbc, $query);
 					 		}
							
							/*if($result){
								echo '<p>Page was added! </P>';
							}else{
								
								echo '<p>Page could not be added because: '.mysqli_error($dbc);
								echo '<p>'.$query.'</P>';
							}*/
							
 					 	
 					 	?>
 					 	
 					 	<form action="index.php" method="post2 role="form">
 					 		<div class="form-group">
	 					 		<label for="title">Page Title:</label>
	 					 		<input class="form-control" type="text" name="title" id="title" placeholder="Page Title"/>
 					 		</div>
 					 		<div class="form-group">
	 					 		<label for="label">Page Label:</label>
	 					 		<input class="form-control" type="text" name="lebal" id="label" placeholder="Page Label"/>
 					 		</div>
 					 		<div class="form-group">
	 					 		<label for="header">Page Header:</label>
	 					 		<input class="form-control" type="text" name="header" id="header" placeholder="Page Header"/>
 					 		</div>
 					 		<div class="form-group">
	 					 		<label for="body">Page Header:</label>
	 					 		<textarea class="form-control" rows="8" name="body" id="body" placeholder="Page Body"/></textarea>
 					 		</div>
 					 		
 					 		<button type="submit" class="btn btn-default">Save</button>
 					 		<input type="hidden" name="submitted" value="1">
 					 	</form>	
 					 </div>
				</div>
				
				
		</div><!--- End wrap -->
			
		<?php include(D_TEMPLATE.'/footer.php'); ?>
		
		<?php if($debug == 1) { include('widget/debug.php'); }	?>
		
	</body>
</html>