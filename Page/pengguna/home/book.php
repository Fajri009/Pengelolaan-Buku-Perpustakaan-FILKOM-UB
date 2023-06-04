<?php
// MySQL database connection configuration
$servername = "localhost";
$username = "root";
$password = "itsme";
$database = "perpus";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve books from the database
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

$books = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

// Close the connection
$conn->close();

// Send the books as JSON response
header('Content-Type: application/json');
echo json_encode($books);
?>
