
<nav class="navbar navbar-default" role="navigator">
	
	<?php if($debug == 1) { ?>
		<button id="btn_debug" class="btn btn-default"><i class="fa fa-bug"></i></button>
	<?php } ?>
	

		<ul class="nav navbar-nav">
		    <?php
				//nav_main($dbc, $pageid);
			?>
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Pages</a></li>
			<li><a href="#">User</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="logout.php">Logout</a></li>
			
			
		</ul>
		
		<ul class="nav navbar-nav">
			
			<li><a href="logout.php">Logout</a></li>
		
		</ul>
</nav><!-- End Nav -->
			