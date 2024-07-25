<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['item_name'])) {
    $item_name = htmlspecialchars($_POST['item_name']);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['itemName'])) {
    $item_name = htmlspecialchars($_GET['itemName']);
} else {
    echo json_encode(['description' => 'Error: item_name or itemName not provided']);
    exit;
}

include 'db_connect.php'; // Ensure you include your database connection script

// Query the description based on item_name
$stmt = $conn->prepare("SELECT description FROM items WHERE item_name = ?");
$stmt->bind_param("s", $item_name);
$stmt->execute();
$stmt->bind_result($description);
$stmt->fetch();

if ($description === null) {
    // If $description is still null, item with item_name was not found
    echo json_encode(['description' => 'Error: Item not found in database']);
} else {
    // Item found, return its description
    echo json_encode(['description' => $description]);
}

$stmt->close();
$conn->close();
?>
