<?php
include 'db_connect.php';

$sql = "SELECT * FROM request";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>
