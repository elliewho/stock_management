<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['item_name'])) {
    $item_name = htmlspecialchars($_POST['item_name']);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['itemName'])) {
    $item_name = htmlspecialchars($_GET['itemName']);
} else {
    echo json_encode(['description' => '']);
    exit;
}

include 'db_connect.php';

$stmt = $conn->prepare("SELECT description FROM items WHERE item_name = ?");
$stmt->bind_param("s", $item_name);
$stmt->execute();
$stmt->bind_result($description);
$stmt->fetch();

if ($description === null) {
    echo json_encode(['description' => '']);
} else {
    echo json_encode(['description' => $description]);
}

$stmt->close();
$conn->close();
?>
