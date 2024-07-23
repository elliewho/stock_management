<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
</head>
<body background="heaven.jpg" style="background-repeat: no-repeat; background-size: cover">
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
    <script>
        Swal.fire({
            title: 'Success',
            text: 'Data stored successfully',
            icon: 'success',
            showConfirmButton: false,
            timer: 1000
        }).then(() => {
            window.location = 'home.php';
        });
    </script>
</body>
</html>
