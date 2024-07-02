<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bin Card</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://www.parfait.com.ph/images/product-icon/philhealth-icon.png">
  <style>
    body{
        font-family: Georgia,Times,Times New Roman,serif; 
    }
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
                <h2><strong>BIN CARD<br>PRO NCR CENTRAL BRANCH<p style="font-size: 30px">Your Partner in Health</strong></p></strong></h2>
                
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2 bold-text">
                Item:
            </div>
            <div class="col-4">
                <p>...</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="description-row">
                            <th rowspan="2">Date</th>
                            <th rowspan="2">Reference</th>
                            <th colspan="2">Receipt</th>
                            <th colspan="2">Issuance</th>
                            <th rowspan="2">Balance Qty.</th>
                            <th rowspan="2">No. Of Days to</th>
                        </tr>
                        <tr class="description-row">
                            <th>Qty.</th>
                            <th>Qty.</th>
                            <th>Office</th>
                            <th>Qty.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>