<?php
header('Content-Type: application/json');

include 'db_connect.php';

// Get item ID from GET parameters
$item_id = isset($_GET['item_id']) ? intval($_GET['item_id']) : 0;

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT item_name, description FROM items WHERE item_id = ?");
$stmt->bind_param('i', $item_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode([
        'success' => true,
        'name' => $row['item_name'],
        'description' => $row['description']
    ]);
} else {
    echo json_encode(['success' => false, 'message' => 'Item not found']);
}

$stmt->close();
$conn->close();
?>
