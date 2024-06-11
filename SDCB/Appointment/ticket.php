<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitor_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM visitors ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No records found";
}
$conn->close();
?>

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
	<link  href='https://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet'>
	-->

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/ticket.css" />
	<link type="text/css" rel="stylesheet" href="css/print.css" />

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
								<h2>Appointment scheduled</h2>
								<p>You are advised to print your ticket and bring it along for verification at the date and time specified.</p>
							</div>
						</div>
						<form id="visitorForm"><!--action="process.php" method="post">-->
							<div class="boarding-pass" id="ticketContainer">
								<header>
									<h1 class="logo">
										Ticket#<?php echo $row['ticket_number']; ?>
									</h1>
									<div class="flight">
										<small>Schools Division</small>
										<strong>Batac City</strong>
									</div>
								</header>
								<section class="infos">
									<div class="places">
										<div class="box">
											<small>Name</small>
											<strong><?php echo $row['name']; ?></strong>
										</div>
										<div class="box">
											<small>Contact Number</small>
											<strong><?php echo $row['contact']; ?></strong>
										</div>
										<div class="box">
											<small>Email Address</small>
											<strong><?php echo $row['email']; ?></strong>
										</div>
										<div class="box">
											<small>Agency</small>
											<strong><?php echo $row['agency']; ?></strong>
										</div>
									</div>
									<div class="times">
										<div class="box">
											<small>Agency to Visit</small>
											<strong><?php echo $row['agency_visit']; ?></strong>
										</div>
										<div class="box">
											<small>Date of Visit</small>
											<strong><?php echo $row['date']; ?></strong>
										</div>
										<div class="box">
											<small>Purpose of Visit</small>
											<strong><?php echo $row['purpose']; ?></strong>
										</div>
										<div class="box">
											<small>Time of Visit</small>
											<strong><?php echo $row['time']; ?></strong>
										</div>
									</div>
								</section>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group-b">
										<div class="form-btn">
											<button class="submit-btn-b" onclick="printTicket()">PRINT TICKET</button>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group-b">
										<div class="form-btn">
											<button class="submit-btn-b" onclick="anotherOne(event)">SCHEDULE ANOTHER APPOINTMENT</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
	function anotherOne(event){
		window.location.href="index.php";
		event.preventDefault();
	}
	function printTicket() {
		var iframe = document.createElement('iframe');
		iframe.style.display = 'none';
		document.body.appendChild(iframe);

		var iframeContent = `
			<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

				<title>Booking Form HTML Template</title>

				<!-- Google font -->
				<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
				

				<!--
				<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
				<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />
				<link  href='https://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet'>
				-->

				<!-- Bootstrap -->
				<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

				<!-- Custom stlylesheet -->
				<link type="text/css" rel="stylesheet" href="css/style.css" />
				<link type="text/css" rel="stylesheet" href="css/ticket.css" />

				<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
					<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
					<![endif]-->

				<style>
					.boarding-pass {
						width: auto;
						height: auto;
					}
				</style>
			</head>
			<body>
				<div id="booking" class="section">
					<!--
					<div class="section-center">
						<div class="container">
							<div class="row">
								<div class="booking-form">
									<div class="booking-bg">
										<div class="form-header">
											<h2>Schedule an Appointment</h2>
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
										</div>
									</div>
									<form id="visitorForm"><!--action="process.php" method="post">-->
										<div class="boarding-pass" id="ticketContainer">
											${document.getElementById("ticketContainer").innerHTML}
										</div>
									<!--
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				-->
			</body>
			</html>
		`;
		
		var doc = iframe.contentWindow.document;
		doc.open();
		doc.write(iframeContent);
		doc.close();

		iframe.contentWindow.onload = function() {
			iframe.contentWindow.print();
			document.body.removeChild(iframe);
		};
	}
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
