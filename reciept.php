<?php
include 'db_connect.php';

// Query to fetch request history
$sql = "SELECT request_date, quantity, destination, balance_end FROM request";
$result = $conn->query($sql);

// Prepare data array
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            'date' => $row['request_date'],
            'iqty' => $row['quantity'],
            'ioffice' => $row['destination'],
            'bqty' => $row['balance_end']
        );
    }
}

// Close connection
$conn->close();

// Output data as JSON
echo json_encode($data);
?>
