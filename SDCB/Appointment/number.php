<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitor_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['ticket_number'])) {
    $ticket_number = $_GET['ticket_number'];
    
    $sql = "SELECT status FROM visitors WHERE ticket_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $ticket_number);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $status = $row['status'];
        echo "Ticket Status: $status";
    } else {
        echo "Ticket not found";
    }
    
    $stmt->close();
} else {
    echo "Ticket number not provided";
}

$conn->close();
?>
