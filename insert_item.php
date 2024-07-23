<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    // Check if the item already exists
    $check_stmt = $conn->prepare("SELECT item_name FROM items WHERE item_name = ?");
    $check_stmt->bind_param("s", $item_name);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // Redirect back with a message or handle the duplicate case
        header("Location: error.php?msg=" . urlencode("Item name already exists"));
        exit;
    } else {
        // Proceed with insertion
        $insert_stmt = $conn->prepare("INSERT INTO items (item_name, quantity, description, category) VALUES (?, ?, ?, ?)");
        $insert_stmt->bind_param("siss", $item_name, $quantity, $description, $category);

        if ($insert_stmt->execute()) {
            // Redirect to success page
            header("Location: success.php");
            exit;
        } else {
            // Redirect to error page if insertion fails
            header("Location: error.php?msg=" . urlencode($insert_stmt->error));
            exit;
        }
    }

    // Close statements and connection
    $check_stmt->close();
    $insert_stmt->close();
    $conn->close();
}
?>
