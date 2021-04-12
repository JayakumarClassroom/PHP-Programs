<?php
	
	$username = "user_name12"; 
	if (preg_match('/^[a-z\d_]{5,20}$/i', $username)) { 
		echo "Your username is ok."; 
	} else { 
		echo "Wrong username format."; 
	}
	
?>