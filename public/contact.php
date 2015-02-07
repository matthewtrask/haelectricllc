<?php
$pageTitle = "Contact Us"; 
include('includes/head.php'); 
include('includes/nav.php');
?>

<main id="body">
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<h2 class="text-right">Contact us!</h2>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h3>IMG</h3>
				<img src="img/barpanel.jpg" alt="" class="img-responsive center-block">

			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h3>Contact Form</h3>
				<form>
					<div class="form-group">
						<label for="Name">Name:</label>
						<input type="Name" class="form-control" id="inputName" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="Email">Email:</label>
						<input type="Email" class="form-control" id="inputEmail" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="Message">Message:</label>
						<textarea col="4" class="form-control" placeholder="Message"></textarea>
					</div>
					<button class="btn btn-lg btn-primary" type="button">Submit</button>
				</form>
			</div>
		</div>
	</div>
</main>