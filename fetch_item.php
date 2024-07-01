<?php
include 'db_connect.php';

// Fetch items from the database including category
$sql = "SELECT * FROM items";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>
