<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(['error' => 'Database connection failed']);
    exit();
}

$data = json_decode(file_get_contents('php://input'), true);
$searchTerm = isset($data['search']) ? $data['search'] : '';

$sql = "SELECT item_name FROM items";
if (!empty($searchTerm)) {
    $searchTerm = $conn->real_escape_string($searchTerm);
    $sql .= " WHERE item_name LIKE '%$searchTerm%'";
}

$result = $conn->query($sql);

$items = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $items[] = ['item_name' => $row['item_name']];
    }
} else {
    http_response_code(404);
}

$conn->close();

echo json_encode($items);
?>
