<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 2/7/15
 * Time: 7:23 PM
 */



	if(isset($_POST["Submit"])) {
		$name = $_POST['Name'];
		$phone = $_POST['Phone'];
		$email = $_POST['Email'];
		$message = $_POST['Message'];


		$from = $email; //Could change
		$to = "Adam@haelectricllc.com";
		$subject = "Electrical work inquiry";

		//Email message
		$body = "From: $name \n Phone: $phone \n Email: $email \n Message: $message \n";


		//Check if fields have been set
		if (empty($_POST['Name'])) {
			$errName = "Please enter your name";
		}

		if (empty($_POST['Phone'])) {
			$errPhone = "Please enter your phone number";
		}

		if (empty($_POST['Email'])) {
			$errEmail = "Please enter your email";
		}

		if (empty($_POST['Message'])) {
			$errMessage = "Please enter a message";
		}
	}

	if(!empty($errName) && !empty($errPhone) && !empty($errEmail) && !empty($errMessage)) {
		if(mail($to, $subject, $body)) {
			$results='<div class="alert alert-success">Thank You! We will be in touch</div>';
		} else {
			$results='<div class="alert alert-danger">Sorry there was an error sending your message, please again later!</div>';
		}
	}

