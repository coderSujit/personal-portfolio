<?php
	if(isset($_REQUEST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
		$name    = htmlspecialchars(trim($_REQUEST["name"]));
		$email   = htmlspecialchars(trim($_REQUEST["email"]));
		$subject = htmlspecialchars(trim($_REQUEST["subject"]));
		$message = htmlspecialchars(trim($_REQUEST["message"]));

		if(empty($name)){
			$em_name = '<small class="from-text error">Please enter at least 4 chars</small>';
		}
		if(empty($email)){
			$em_email = '<small class="from-text error">Please enter a valid email</small>';
		}
		if(empty($subject)){
			$em_sub = '<small class="from-text error">Please enter at least 8 chars of subject</small>';
		}
		if(empty($message)){
			$em_msg = '<small class="from-text error">Please write something for us</small>';
		}
	}
?>