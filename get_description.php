<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['itemName'])) {
    $itemName = htmlspecialchars($_GET['itemName']);

    include 'db_connect.php';

    $stmt = $conn->prepare("SELECT description FROM items WHERE item_name = ?");
    $stmt->bind_param("s", $itemName);
    $stmt->execute();
    $stmt->bind_result($description);
    $stmt->fetch();
    $stmt->close();

    $conn->close();

    echo json_encode(['description' => $description ? $description : '']);
} else {
    echo json_encode(['description' => 'Error: itemName not provided']);
}
?>
