<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    $check_stmt = $conn->prepare("SELECT item_name FROM items WHERE item_name = ?");
    $check_stmt->bind_param("s", $item_name);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        header("Location: error.php?msg=" . urlencode("Item name already exists"));
        exit;
    } else {
        $insert_stmt = $conn->prepare("INSERT INTO items (item_name, quantity, description, category) VALUES (?, ?, ?, ?)");
        $insert_stmt->bind_param("siss", $item_name, $quantity, $description, $category);

        if ($insert_stmt->execute()) {
            header("Location: success.php");
            exit;
        } else {
            header("Location: error.php?msg=" . urlencode($insert_stmt->error));
            exit;
        }
    }

    $check_stmt->close();
    $insert_stmt->close();
    $conn->close();
}
?>
