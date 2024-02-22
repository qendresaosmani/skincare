<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = '';
$database = "project";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Fetch data from service table
$sql = "SELECT service.id, service.name, service.description, service.date_created, category.cat_name
        FROM service
        INNER JOIN category ON service.category_id = category.category_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["date_created"] . "</td>";
        echo "<td>" . $row["cat_name"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No services found</td></tr>";
}

$conn->close();
?>
