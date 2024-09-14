<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "airline_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$from = $_POST['from'];
$to = $_POST['to'];
$departure_date = $_POST['departure-date'];
$return_date = $_POST['return-date'];
$passengers = $_POST['passengers'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (from_city, to_city, departure_date, return_date, passengers) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $from, $to, $departure_date, $return_date, $passengers);

// Execute the statement
if ($stmt->execute()) {
    echo "Booking recorded successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
