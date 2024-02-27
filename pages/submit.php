<?php

$servername = "localhost";
$username = "root";
$password = ''; 
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$description = $_POST['description'];

// Insert data into the database
$sql = "INSERT INTO contacts (id, firstname, lastname, email, description) VALUES ('$id', '$firstname', '$lastname', '$email', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: contact.html");
exit();
?>
