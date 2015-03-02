<?php
$pageTitle = "Contact Us"; 
include('includes/head.php');
include('includes/nav.php');

	if(isset($_POST["Submit"])) {
		$name = $_POST['Name'];
		$phone = $_POST['Phone'];
		$email = $_POST['Email'];
		$message = $_POST['Message'];

		$to = "mjftrask@gmail.com";
		$from = $email; 
		$subject = "Electrical work inquiry";

		$output_form = false;

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

	else {
		$output_form = true;
	}

	if(empty($errName) && empty($errPhone) && empty($errEmail) && !\empty($errMessage)) {
		mail($to, $subject, $body); 
		$results = '<div class="alert alert-success">Your message was sent! We will contact you soon!</div>';
		} else {
			$results='<div class="alert alert-danger">Sorry there was an error sending your message, please again later!</div>';
		}
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
				<p class="text-left">We will drive within 25 miles of Atlanta for a free estimate!</p>
				<div id="map-canvas">
				</div>
			</div>

			<?php
				if($output_form) {
			?>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

				<h3>Contact Form</h3>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" role="form">

					<div class="form-group">
						<label for="Name"><i class="fa fa-user"></i>Name:</label>
						<input name="Name" type="Name" class="form-control" id="Name" placeholder="Name:" required>
						<?php echo "<p class='text-danger'>$errName</p>";?>
					</div>
					<div class="form-group">
						<label for="Phone"><i class="fa fa-phone"></i> Phone Number:</label>
						<input name="Phone" type="Phone" class="form-control" id="Phone" placeholder="Phone:" required>
						<?php //echo "<p class='text-danger'>$errPhone</p>";?>
					</div>
					<div class="form-group">
						<label for="Email"><i class="fa fa-envelope"></i>Email:</label>
						<input name="Email" type="Email" class="form-control" id="Email" placeholder="Email:" required>
						<p class='text-danger'><?php echo $errEmail; ?></p>
					</div>
					<div class="form-group">
						<label for="Message"><i class="fa fa-pencil"></i>Message:</label>
						<textarea name="Message" col="6" class="form-control" placeholder="Message:"></textarea required>
					</div>
					<input id="Submit" name="Submit" type="Submit" value="Submit" class="btn btn-primary">
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $results; ?>
						</div>
					</div>

				</form>

				<?php
				}
				?>
			</div>
		</div>
	</div>

</main>

<script type="text/javascript">


    function initialize() {
  		var myLatlng = new google.maps.LatLng(34.0737574,-84.280203);
  		var mapOptions = {
    	zoom: 8,
    	center: myLatlng
  	}
  	
  	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  	var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  	});

  	var circle = new google.maps.Circle({
  		map: map,
  		radius: 56327,    // 10 miles in metres
  		fillColor: '#AA0000'
	});
	circle.bindTo('center', marker, 'position');

  }
	google.maps.event.addDomListener(window, 'load', initialize);

</script>

<?php
include('includes/footer.php');
include('includes/bottom.php');
?>