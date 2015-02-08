<?php
$pageTitle = "Contact Us"; 
include('includes/head.php'); 
include('includes/nav.php');
include('includes/contact.php');
?>

<main id="body">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2>Contact us today for a free estimate!</h2>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h3>Google Map</h3>
				<p>We will drive within 35 miles of Alpharetta for free estimates.</p>
				<img src="img/barpanel.jpg" alt="" class="img-responsive center-block">

			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h3>Contact Form</h3>
				<form action="includes/contact.php" method="POST">
					<div class="form-group">
						<label for="Name"><i class="fa fa-user"></i>Name:</label>
						<input type="Name" class="form-control" id="inputName" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="Phone"><i class="fa fa-phone"></i> Phone Number:</label>
						<input type="Phone" class="form-control" id="inputPhone" placeholder="Phone">
					</div>
					<div class="form-group">
						<label for="Email"><i class="fa fa-envelope"></i>Email:</label>
						<input type="Email" class="form-control" id="inputEmail" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="Message"><i class="fa fa-pencil"></i>Message:</label>
						<textarea col="4" class="form-control" placeholder="Message"></textarea>
					</div>
					<button class="btn btn-lg btn-block btn-primary" type="button">Submit</button>
				</form>
			</div>
		</div>
	</div>

</main>

<?php
include('includes/footer.php');
?>