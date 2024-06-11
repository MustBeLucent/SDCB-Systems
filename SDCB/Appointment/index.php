<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Appointment System</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!--
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />
	-->

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Schedule an Appointment</h2>
								<p>Complete this form to schedule an appointment with us.</p>
							</div>
						</div>
						<form id="visitorForm" action="process.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" id="name" name="name" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Contact Number</span>
										<input class="form-control" type="tel" id="contact" name="contact" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Email Address</span>
										<input class="form-control" type="email" id="email" name="email" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Agency</span>
										<input class="form-control" type="text" id="agency" name="agency" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Agency to Visit</span>
								<input class="form-control" type="text" id="agency_visit" name="agency_visit" required>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Date of Visit</span>
										<input class="form-control" type="date" id="date" name="date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Time of Visit</span>
										<input class="form-control" type="time" id="time" name="time" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Purpose of Visit</span>
								<input class="form-control" id="purpose" name="purpose" required>
							</div>
							<div class="form-btn">
								<button class="submit-btn" type="submit" value="Submit">SUBMIT</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="script.js"></script>
</body>
</html>
