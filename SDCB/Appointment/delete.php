<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitor_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlLastId = "SELECT id FROM visitors ORDER BY id DESC LIMIT 1";
$result = $conn->query($sqlLastId);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastId = $row['id'];
} else {
    echo "No records found";
    exit();
}

$sqlDelete = "DELETE FROM visitors WHERE id = $lastId";

if ($conn->query($sqlDelete) === TRUE) {
    $sqlUpdateAutoIncrement = "ALTER TABLE visitors AUTO_INCREMENT = $lastId";
    if ($conn->query($sqlUpdateAutoIncrement) === TRUE) {
        header("Location: index.php?id=$lastId");
    } else {
        echo "Error updating auto-increment value: " . $conn->error;
    }
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
