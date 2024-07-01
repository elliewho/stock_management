<?php
include 'db_connect.php';

// Check if form data is being received
if (isset($_POST['item_name'], $_POST['quantity'], $_POST['destination'], $_POST['request_date'])) {
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $destination = $_POST['destination'];
    $request_date = $_POST['request_date'];

    // Begin transaction for atomic operations
    $conn->begin_transaction();

    // Insert into request table
    $stmt1 = $conn->prepare("INSERT INTO request (item_name, quantity, destination, request_date) VALUES (?, ?, ?, ?)");
    if ($stmt1 === false) {
        trigger_error($conn->error, E_USER_ERROR);
    }
    $stmt1->bind_param("siss", $item_name, $quantity, $destination, $request_date);

    // Update utilization in items table
    $stmt2 = $conn->prepare("UPDATE items SET utilization = utilization + ? WHERE item_name = ?");
    if ($stmt2 === false) {
        trigger_error($conn->error, E_USER_ERROR);
    }
    $stmt2->bind_param("is", $quantity, $item_name);

    // Execute both statements
    $success1 = $stmt1->execute();
    $success2 = $stmt2->execute();

    // Check if both executions were successful
    if ($success1 && $success2) {
        $conn->commit(); // Commit transaction
        $stmt1->close();
        $stmt2->close();
        $conn->close();
        header("Location: success.php");
        exit;
    } else {
        $conn->rollback(); // Rollback transaction on failure
        $stmt1->close();
        $stmt2->close();
        $conn->close();
        header("Location: error.php?msg=" . urlencode($conn->error));
        exit;
    }
} else {
    echo "Error: Form data is missing.";
}
?>
