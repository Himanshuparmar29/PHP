<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed " . mysqli_connect_error());
}

$name = $_POST["name"];
$id = $_POST["id"];
$sql = "INSERT INTO student (name, id) VALUES ('$name', '$id')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Inserted successfully!');</script>";
    mysqli_close($conn);
    echo "<script>window.location.href = '../HTML/take_input.html';</script>";
    exit();
} else {
    echo "Can not insert " . mysqli_error($conn);
}

mysqli_close($conn);
?>
