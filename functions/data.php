<?php
	
	function data_page($dbc, $id){
		
	
		$query = "SELECT * FROM pages WHERE id = $id";
		$result = mysqli_query($dbc, $query);
		
		$data = mysqli_fetch_assoc($result);
		
		$data['body_nohtml'] = strip_tags($data['body']);
		if($data['body'] == $data['body_nohtml']){
			
			$data['body_fomatted'] = '<p>'.$data['body'].'</p>';
		}else{
			$data['body_formatted'] = $data['body'];
		}
			
		
		
		return  $data;
	}

?>