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
    $ticket_id = $conn->insert_id;
    
    $current_year = date("y");
    
    $ticket_number = $current_year . $ticket_id;
    
    $update_sql = "UPDATE visitors SET ticket_number='$ticket_number' WHERE id='$ticket_id'";
    $conn->query($update_sql);
    
    header("Location: view.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
