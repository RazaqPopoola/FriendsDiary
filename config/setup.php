<?php
	//setup files

	#Database Connection Here.....
	$dbc = mysqli_connect('localhost', 'dwuser', 'razaq1', 'dwdatabase')Or die('Could not connect: '.mysqli_error());
	
	# Constants:
	DEFINE('D_TEMPLATE', 'template');
	
	#functions:
	include('functions/data.php');
	include('functions/template.php');
	
	$site_title = 'Dynamic Website';
	
	if(isset($_GET['page'])){
		$pageid = $_GET['page'];//set the $pageid to equal to the value of the URL
	}else{
		$pageid = 1; //Set $pageid to equal to 1 or home page
	}
	
		//page setup
		$page = data_page($dbc, $pageid);
?>