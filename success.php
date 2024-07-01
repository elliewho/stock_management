<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
</head>
<body background="heaven.jpg" style="background-repeat: no-repeat; background-size: cover">
    <!-- Include SweetAlert2 JS -->
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <script>
        // Display a success message using SweetAlert2
        Swal.fire({
            title: 'Success',
            text: 'Data stored successfully',
            icon: 'success',
            showConfirmButton: false,
            timer: 1000
        }).then(() => {
            // Redirect to the index page after the message disappears
            window.location = 'home.php';
        });
    </script>
</body>
</html>
