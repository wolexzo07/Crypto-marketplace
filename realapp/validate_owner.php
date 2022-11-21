<?php
		// Validate admin role
		if(x_validatesession("TIMBOSS_CRYPTBUY_ID")){
			
			$user = $_SESSION["TIMBOSS_CRYPTBUY_ID"];
			$getrole  = x_getsingle("select role from createusers where id='$user' LIMIT 1","createusers where id='$user' LIMIT 1","role");
			
			if($getrole != "1"){
				?><script>
				load('homedash');
				</script><?php
			}
			
		}
		
		?>