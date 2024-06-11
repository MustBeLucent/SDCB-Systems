<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'form';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tao = $_POST['tao'];
$asa = $_POST['asa'];
$usap = $_POST['usap'];
$name = $_POST['name'];
$date = $_POST['date'];
$tapat = $_POST['tap'];
$tugon = $_POST['tugon'];
$tiwala = $_POST['tiw'];
$gastos = $_POST['gas'];
$office = $_POST['office'];
$contact = $_POST['number'];
$service = $_POST['service'];
$outcome = $_POST['out'];
$comment = $_POST['comments'];
$lokasyon = $_POST['lok'];

$sum = $tugon + $asa + $lokasyon + $usap + $gastos + $tapat + $tiwala + $outcome;
$rating = $sum / 8;

$stmt = $conn->prepare("INSERT INTO feedback (name, contact_details, office_visited, personnel_visited, date_visited, services_received, responsiveness, reliability, access_and_facilities, communication, costs, integrity, assurance, outcome, comments, total_rating) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssssssssssd", $name, $contact, $office, $tao, $date, $service, $tugon, $asa, $lokasyon, $usap, $gastos, $tapat, $tiwala, $outcome, $comment, $rating);

if ($stmt->execute()) {
    sleep(1);
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();

?>