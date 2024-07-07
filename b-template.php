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

        @media print {
            .print-button {
                display: none !important;
            }
        }

        .table-bordered th,
        .table-bordered td {
            border: 2px solid black !important;
            padding: 0;
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

        button {
            outline: none;
            cursor: pointer;
            border: none;
            padding: 0.9rem 2rem;
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            position: relative;
            display: inline-block;
            letter-spacing: 0.05rem;
            font-weight: 700;
            font-size: 17px;
            border-radius: 500px;
            overflow: hidden;
            background: #66ff66;
            color: ghostwhite;
        }

        button span {
            position: relative;
            z-index: 10;
            transition: color 0.4s;
        }

        button:hover span {
            color: yellow;
        }

        button::before,
        button::after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        button::before {
            content: "";
            background: #00C000;
            width: 120%;
            left: -10%;
            transform: skew(30deg);
            transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
        }

        button:hover::before {
            transform: translate3d(100%, 0, 0);
        }
    </style>
</head>

<body>
<button class="btn  print-button" style="float: right; margin-right: 60px; margin-top: 0px" onclick="window.print()"><span>Print</span></button>
    <div class="container mt-8">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #e9ecef">
                    <th colspan="8"
                        style="text-align: center; font-size: 1.8rem; padding-top: 5px; padding-bottom: 0px">
                        PhilHealth<br>Bin Card<br>Your Partner in Health<br><br>
                        <p style="text-align: left; font-size: 19px; margin-left: 10px" class="article">Article:</p>
                        <p style="text-align: left; font-size: 19px; margin-left: 10px" class="description">Description:
                        </p>
                    </th>
                </tr>
                <tr>
                    <th colspan="2" rowspan="2"
                        style="border-bottom: none; text-align: center; vertical-align: middle; padding: 17px"
                        class="dri">Date<br>Received/Issue</th>
                    <th colspan="2" rowspan="2" style="border-bottom: none; text-align: center; vertical-align: middle"
                        class="sws">SWS/RIS NO.<br>Transaction no.</th>
                    <th colspan="3"
                        style="border-bottom: none; text-align: center; vertical-align: middle; padding: 4px"
                        class="quan">QUANTITY</th>
                    <th colspan="2" rowspan="2" style="border-bottom: none; text-align: center; vertical-align: middle"
                        class="issue">Issued By</th>
                </tr>
                <tr>
                    <th style="border-bottom: none; text-align: center; vertical-align: middle; padding: 6px">Received
                    </th>
                    <th style="border-bottom: none; text-align: center; vertical-align: middle; padding: 6px">Issued
                    </th>
                    <th style="border-bottom: none; text-align: center; vertical-align: middle; padding: 6px">
                        Balance<br>on hand</th>
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