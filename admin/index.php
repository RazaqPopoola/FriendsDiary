
<?php 
	#start the session
	session_start();
	
	if(!isset($_SESSION['username'])){
		
		header('Location: login.php');
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
				
		</div><!--- End wrap -->
			
		<?php include(D_TEMPLATE.'/footer.php'); ?>
		
		<?php if($debug == 1) { include('widget/debug.php'); }	?>
		
	</body>
</html>