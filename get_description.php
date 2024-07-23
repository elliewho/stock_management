<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['item_name'])) {
    $item_name = htmlspecialchars($_POST['item_name']);

    include 'db_connect.php'; // Ensure you include your database connection script

    // Query the description based on item_name
    $stmt = $conn->prepare("SELECT description FROM items WHERE item_name = ?");
    $stmt->bind_param("s", $item_name);
    $stmt->execute();
    $stmt->bind_result($description);
    $stmt->fetch();
    $stmt->close();

    $conn->close();

    // Return the description in JSON format
    echo json_encode(['description' => $description]);
} else {
    // Return error if the request method is not POST or item_name is not set
    echo json_encode(['description' => null]);
}
?>
