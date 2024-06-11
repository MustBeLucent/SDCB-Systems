<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitor_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$agency = $_POST['agency'];
$agency_visit = $_POST['agency_visit'];
$date = $_POST['date'];
$time = $_POST['time'];
$purpose = $_POST['purpose'];

$sql = "INSERT INTO visitors (name, contact, email, agency, agency_visit, date, time, purpose)
        VALUES ('$name', '$contact', '$email', '$agency', '$agency_visit', '$date', '$time', '$purpose')";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
