<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = htmlspecialchars($_POST['item_name']);
    $description = htmlspecialchars($_POST['description']); 
    $quantity = (int)$_POST['quantity'];
    $destination = htmlspecialchars($_POST['destination']);
    $request_date = htmlspecialchars($_POST['request_date']);

    include 'db_connect.php';

    $conn->begin_transaction();

    // Get the current balance_end
    $stmt_balance = $conn->prepare("SELECT balance_end FROM items WHERE item_name = ?");
    $stmt_balance->bind_param("s", $item_name);
    $stmt_balance->execute();
    $stmt_balance->bind_result($current_balance);
    $stmt_balance->fetch();
    $stmt_balance->close();

    if ($current_balance >= $quantity) {
        // Calculate new balance_end
        $new_balance_end = $current_balance - $quantity;

        // Update utilization and balance_end in items table
        $stmt_update = $conn->prepare("UPDATE items SET utilization = utilization + ?, balance_end = ? WHERE item_name = ?");
        $stmt_update->bind_param("iis", $quantity, $new_balance_end, $item_name);
        $success_update = $stmt_update->execute();
        $stmt_update->close();

        if ($success_update) {
            // Insert into request table with new balance_end
            $stmt_insert = $conn->prepare("INSERT INTO request (item_name, description, quantity, destination, request_date, balance_end) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt_insert->bind_param("ssissi", $item_name, $description, $quantity, $destination, $request_date, $new_balance_end);
            $success_insert = $stmt_insert->execute();
            $stmt_insert->close();

            if ($success_insert) {
                $conn->commit();
                $conn->close();
                header("Location: success.php");
                exit;
            } else {
                $conn->rollback();
                $conn->close();
                header("Location: error.php?msg=" . urlencode("Failed to insert request"));
                exit;
            }
        } else {
            $conn->rollback();
            $conn->close();
            header("Location: error.php?msg=" . urlencode("Failed to update utilization"));
            exit;
        }
    } else {
        $conn->rollback();
        $conn->close();
        header("Location: error.php?msg=" . urlencode("Insufficient balance for the request"));
        exit;
    }
} else {
    header("Location: home.php");
    exit;
}

?>
