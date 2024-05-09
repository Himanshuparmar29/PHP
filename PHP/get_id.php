<?php
$servername = "localhost";
$username = "root";
$password = "Sports@Inv2937";
$dbname = "practice
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_GET['name'];

$sql = "SELECT id FROM student WHERE name = '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['id'];
} else {
    echo "ID not found";
}

$conn->close();
?>
