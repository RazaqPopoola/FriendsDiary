<div id="console-debug">
	
	<?php
		$all_vars = get_defined_vars();
	?>
	
	<pre>
		<h1>All Variables</h1>
		<?php print_r($page); 	?>
	</pre>
	
	<pre>
		<h1>GET</h1>
		<?php print_r($_GET); 	?>
	</pre>
	
	<pre>
		<h1>POST</h1>
		<?php print_r($_POST); 	?>
	</pre>
	
	<pre>
		<h1>Page Arrays</h1>
		<?php	print_r($all_vars) ?>
	</pre>	
</div>