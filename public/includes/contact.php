<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 2/7/15
 * Time: 7:23 PM
 */

if($_POST["submit"]) {
	$name = $_POST['Name'];
	$phone = $_POST['Phone'];
	$email = $_POST['Email'];
	$message = $_POST['Message'];
	

	$from = "Demo Contact Form"; //Could change
	$to = "Adam@haelectricllc.com";
	$subject = "Electrical work inquiry";
	
	//Email message
	$body = "From: $name\n Phone: $phone \n Email: $email \n Message: $message \n";


	//Check if name has been entered
	if(!$_POST['Name']){
		$errName = "Please enter your name";
	}

	if(!$_POST['Phone']){
		$errPhone = "Please enter your phone number";
	}

	if(!$_POST['Email']){
		$errEmail = "Please enter your phone number";
	}


	// if (isset($name)) {
	//     $name = $_POST['Name'];
	// } else {
	// 	$errName = "Please enter a name";
	// }

	// if (isset($phone)) {
	//     $phone = $_POST['Phone'];
	// } else {
	// 	$errPhone = "Please enter a phone number";
	// }

	// if (isset($email)) {
	//     $email = $_POST['Email'];
	// } else {
	// 	$errEmail = "Please enter an email address";
	// }

	// if (isset($message)) {
	//     $message = $_POST['Message'];
	// }
}