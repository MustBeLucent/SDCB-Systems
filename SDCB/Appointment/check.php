<!DOCTYPE html>
<html>
<head>
	<title>Ticket Status</title>
	<link rel="stylesheet" href="css/check.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body>
	<div id="booking" class="main">
		<h1>CSD Batac | Appointments</h1>
		<form id="ticketForm">
			<label for="ticketNumber">Enter Your Ticket Number:</label>
            <div class="wrap">
                <input type="text" id="ticketNumber" name="ticketNumber" required>
                <button type="submit" type="submit" id="in" name="in">CHECK STATUS</button>
            </div>
		</form>
        <div id="statusResult"></div>
	</div>
    <script src="check.js"></script>
</body>
</html>
