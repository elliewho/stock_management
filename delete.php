<?php include 'db_connect.php'; ?>
<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "your_database";

    // SQL to delete record
    $sql = "DELETE FROM items WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Deletion successful
        echo 'success';
    } else {
        // Deletion failed
        echo 'error';
    }

    $stmt->close();
    $conn->close();
} else {
    // Handle case where id parameter is missing or empty
    echo 'error';
}
?>
