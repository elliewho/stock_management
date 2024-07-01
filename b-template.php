<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bin Card</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
        .table-bordered th, .table-bordered td {
            border: 1px solid black !important;
        }
        .table thead th {
            vertical-align: middle;
            text-align: center;
        }
        .header-text {
            text-align: center;
            font-weight: bold;
        }
        .description-row {
            background-color: #e9ecef;
        }
        .small-text {
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 header-text">
                <h2>PhilHealth</h2>
                <h4>Bin Card</h4>
                <h5>Your Partner in Health</h5>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <p><strong>Article</strong></p>
                <p><strong>Description</strong></p>
            </div>
            <div class="col-10">
                <p>...</p>
                <p>...</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="description-row">
                            <th rowspan="2">Date Received/Issued</th>
                            <th rowspan="2">SWS/RIS/Transaction no.</th>
                            <th colspan="3">QUANTITY</th>
                            <th rowspan="2">Issued By</th>
                        </tr>
                        <tr class="description-row">
                            <th>Received</th>
                            <th>Issued</th>
                            <th>Balance on Hand</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1/31/2024</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>6</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
