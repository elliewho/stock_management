<?php
include 'db_connect.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemId = $_POST['itemId'];
    $received = $_POST['received'];

    // Calculate the new balance
    $sql = "SELECT quantity, utilization FROM items WHERE id = $itemId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $balanceStart = $row['quantity'];
        $utilization = $row['utilization'];
        $balanceEnd = $balanceStart + $received - $utilization;

        // Update the record in the database
        $updateSql = "UPDATE items SET receivedQuantity = $received, balance_end = $balanceEnd WHERE id = $itemId";
        if ($conn->query($updateSql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "No record found";
    }

    $conn->close();
}

// Redirect back to the inventory page
header("Location: home.php");
exit();
?>
