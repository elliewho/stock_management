<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    // Check if the form has been submitted before processing it
    if (!isset($_SESSION['form_submitted'])) {
        // Set a session variable to mark the form as submitted
        $_SESSION['form_submitted'] = true;

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO items (item_name, quantity, description, category) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $item_name, $quantity, $description, $category);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to a success page
            header("Location: success.php");
            exit;
        } else {
            // Redirect to an error page
            header("Location: error.php?msg=" . urlencode($stmt->error));
            exit;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        // Redirect to prevent duplicate form submission
        header("Location: home.php");
        exit;
    }
}
?>
