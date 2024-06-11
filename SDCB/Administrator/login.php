<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'form';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['password'] == $password) {
            header("Location: pages-blank.php");
            exit();
        } else {
            echo "<script language='javascript'>";
            echo "alert('Incorrect username or password.');";
            echo "</script>";
        }
    } else {
        echo "<script language='javascript'>";
        echo "alert('User not found.');";
        echo "</script>";
    }
}

$conn->close();
?>