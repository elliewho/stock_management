<?php

header('Content-Type: application/json');

$itemName = isset($_GET['itemName']) ? $_GET['itemName'] : '';

if (empty($itemName)) {
    echo json_encode(['error' => 'No item name provided']);
    exit;
}

$host = 'localhost'; 
$db = 'stock';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT request_date, quantity, destination, balance_end FROM request WHERE item_name = :itemName");
    $stmt->execute(['itemName' => $itemName]);
    $requests = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($requests);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
