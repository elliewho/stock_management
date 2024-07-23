<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = htmlspecialchars($_POST['item_name']);
    $description = htmlspecialchars($_POST['description']); 
    $quantity = (int)$_POST['quantity'];
    $destination = htmlspecialchars($_POST['destination']);
    $request_date = htmlspecialchars($_POST['request_date']);

    include 'db_connect.php';

    $conn->begin_transaction();

    $stmt_balance = $conn->prepare("SELECT balance_end FROM items WHERE item_name = ?");
    $stmt_balance->bind_param("s", $item_name);
    $stmt_balance->execute();
    $stmt_balance->bind_result($current_balance);
    $stmt_balance->fetch();
    $stmt_balance->close();

    if ($current_balance >= $quantity) {
        $stmt_update = $conn->prepare("UPDATE items SET utilization = utilization + ?, balance_end = balance_end - ? WHERE item_name = ?");
        $stmt_update->bind_param("iis", $quantity, $quantity, $item_name);
        $success_update = $stmt_update->execute();
        $stmt_update->close();

        if ($success_update) {
            $stmt_insert = $conn->prepare("INSERT INTO request (item_name, description, quantity, destination, request_date) VALUES (?, ?, ?, ?, ?)");
            $stmt_insert->bind_param("ssiss", $item_name, $description, $quantity, $destination, $request_date);
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
