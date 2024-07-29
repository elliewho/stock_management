<?php
include 'db_connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemId = $_POST['itemId'];
    $received = $_POST['received'];

    $sql = "SELECT quantity, utilization FROM items WHERE id = $itemId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $balanceStart = $row['quantity'];
        $utilization = $row['utilization'];
        $balanceEnd = $balanceStart + $received - $utilization;

        $updateSql = "UPDATE items SET receivedQuantity = $received, balance_end = $balanceEnd WHERE id = $itemId";
        if ($conn->query($updateSql) === TRUE) {
            echo 'success';
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "No record found";
    }

    $conn->close();
}

header("Location: home.php");
exit();
?>
