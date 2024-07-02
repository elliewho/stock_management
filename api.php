<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);
$searchTerm = isset($data['search']) ? $data['search'] : '';

$sql = "SELECT item_name FROM request";
if (!empty($searchTerm)) {
    $searchTerm = $conn->real_escape_string($searchTerm);
    $sql .= " WHERE item_name LIKE '%$searchTerm%'";
}

$result = $conn->query($sql);

$items = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $items[] = ['item_name' => $row['item_name']];
    }
}

$conn->close();

echo json_encode($items);
?>
