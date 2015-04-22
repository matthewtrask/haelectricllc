<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 4/21/15
 * Time: 9:23 PM
 */

//	if(isset($_POST["Submit"])) {
//		$name = $_POST['Name'];
//		$phone = $_POST['Phone'];
//		$email = $_POST['Email'];
//		$message = $_POST['Message'];
//
//		$to = "mjftrask@gmail.com";
//		$from = $email;
//		$subject = "Electrical work inquiry";
//
//		$output_form = false;
//
//		//Email message
//		$body = "From: $name \n Phone: $phone \n Email: $email \n Message: $message \n";
//
//
//		//Check if fields have been set
//		if (empty($_POST['Name'])) {
//			$errName = "Please enter your name";
//		}
//
//		if (empty($_POST['Phone'])) {
//			$errPhone = "Please enter your phone number";
//		}
//
//		if (empty($_POST['Email'])) {
//			$errEmail = "Please enter your email";
//		}
//
//		if (empty($_POST['Message'])) {
//			$errMessage = "Please enter a message";
//		}
//	}
//
//	else {
//		$output_form = true;
//	}
//
//	if(empty($errName) && empty($errPhone) && empty($errEmail) && empty($errMessage)) {
//		mail($to, $subject, $body);
//		$results = '<div class="alert alert-success">Your message was sent! We will contact you soon!</div>';
//		} else {
//			$results='<div class="alert alert-danger">Sorry there was an error sending your message, please again later!</div>';
//		}