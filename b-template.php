<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bin Card</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://www.parfait.com.ph/images/product-icon/philhealth-icon.png">
    <style>
        body {
            font-family: Georgia, Times, Times New Roman, serif;
        }
        .table-bordered th, .table-bordered td {
            border: 2px solid black !important;
            padding: 0; /* Set padding to 0 for all table cells */
        }
        .small-text {
            font-size: 0.8rem;
        }
        .dri {
            border-bottom: none;
            text-align: center;
            vertical-align: middle;
            width: 22%;
        }
        .sws {
            border-bottom: none;
            text-align: center;
            vertical-align: middle;
            width: 18%;
        }
        .issue {
            width: 15%;
        }
    </style>
</head>
<body>
    <div class="container mt-8">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #e9ecef">
                    <th colspan="8" style="text-align: center; font-size: 1.8rem; padding-top: 5px; padding-bottom: 0px">
                        PhilHealth<br>Bin Card<br>Your Partner in Health<br><br>
                        <p style="text-align: left; font-size: 19px; margin-left: 10px" class="article">Article:</p>
                        <p style="text-align: left; font-size: 19px; margin-left: 10px" class="description">Description:</p>
                    </th>
                </tr>
                <tr>
                <th colspan="2" rowspan="2" style="border-bottom: none; text-align: center; vertical-align: middle; padding: 17px" class="dri">Date<br>Received/Issue</th>
                <th colspan="2" rowspan="2" style="border-bottom: none; text-align: center; vertical-align: middle" class="sws">SWS/RIS NO.<br>Transaction no.</th>
                <th colspan="3" style="border-bottom: none; text-align: center; vertical-align: middle; padding: 4px" class="quan">QUANTITY</th>
                <th colspan="2" rowspan="2" style="border-bottom: none; text-align: center; vertical-align: middle" class="issue">Issued By</th>
                </tr>
                <tr>
                <th style="border-bottom: none; text-align: center; vertical-align: middle; padding: 6px">Received</th>
                <th style="border-bottom: none; text-align: center; vertical-align: middle; padding: 6px">Issued</th>
                <th style="border-bottom: none; text-align: center; vertical-align: middle; padding: 6px">Balance<br>on hand</th>
                </tr>
                <td style="text-align: center; vertical-align: middle; padding: 1px">1</td>
                <td style="text-align: center; vertical-align: middle; padding: 1px">2</td>
                <td style="text-align: center; vertical-align: middle; padding: 1px">3</td>
                <td style="text-align: center; vertical-align: middle; padding: 1px">4</td>
                <td style="text-align: center; vertical-align: middle; padding: 1px">5</td>
                <td style="text-align: center; vertical-align: middle; padding: 1px">6</td>
                <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 23px">7</td>
                <td style="text-align: center; vertical-align: middle; padding: 1px">8</td>
            </thead>
            <tbody id="itemTransactions">
                <!-- Your table body content here -->
            </tbody>
        </table>
    </div>
</body>
</html>
