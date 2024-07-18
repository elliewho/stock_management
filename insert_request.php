<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure all necessary fields are present and sanitize input
    $item_name = htmlspecialchars($_POST['item_name']);
    $quantity = (int)$_POST['quantity'];
    $destination = htmlspecialchars($_POST['destination']);
    $request_date = htmlspecialchars($_POST['request_date']); // Assuming you set this in JavaScript (though disabled)

    include 'db_connect.php'; // Make sure to include your database connection script

    $conn->begin_transaction();

    // Check current balance
    $stmt_balance = $conn->prepare("SELECT balance_end FROM items WHERE item_name = ?");
    $stmt_balance->bind_param("s", $item_name);
    $stmt_balance->execute();
    $stmt_balance->bind_result($current_balance);
    $stmt_balance->fetch();
    $stmt_balance->close();

    // Proceed if enough balance is available
    if ($current_balance >= $quantity) {
        // Update items table (deduct utilization and update balance)
        $stmt_update = $conn->prepare("UPDATE items SET utilization = utilization + ?, balance_end = balance_end - ? WHERE item_name = ?");
        $stmt_update->bind_param("iis", $quantity, $quantity, $item_name);
        $success_update = $stmt_update->execute();
        $stmt_update->close();

        if ($success_update) {
            // Insert into request table
            $stmt_insert = $conn->prepare("INSERT INTO request (item_name, quantity, destination, request_date) VALUES (?, ?, ?, ?)");
            $stmt_insert->bind_param("siss", $item_name, $quantity, $destination, $request_date);
            $success_insert = $stmt_insert->execute();
            $stmt_insert->close();

            if ($success_insert) {
                // Insert or update stock card (assuming you have a stock_card table)
                // Adjust this part based on your actual stock_card table structure

                // Commit transaction and redirect on success
                $conn->commit();
                $conn->close();
                header("Location: success.php");
                exit;
            } else {
                // Rollback transaction and redirect on failure to insert request
                $conn->rollback();
                $conn->close();
                header("Location: error.php?msg=" . urlencode("Failed to insert request"));
                exit;
            }
        } else {
            // Rollback transaction and redirect on failure to update utilization
            $conn->rollback();
            $conn->close();
            header("Location: error.php?msg=" . urlencode("Failed to update utilization"));
            exit;
        }
    } else {
        // Rollback transaction and redirect on insufficient balance
        $conn->rollback();
        $conn->close();
        header("Location: error.php?msg=" . urlencode("Insufficient balance for the request"));
        exit;
    }
} else {
    // Redirect if not accessed via POST method
    header("Location: home.php");
    exit;
}
?>