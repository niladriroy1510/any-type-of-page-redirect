<?php

// any type of page redirect useing wordpress header.php

	global $post;
	if($post->ID == '346'){ 
		 echo "<script>window.location = 'home_url(/login)';</script>";
	}

?>