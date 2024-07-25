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

            .table {
                border: 1px solid black !important;
            }

            .table td,
            .table th {
                border: 1px solid black !important;
            }
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid black !important;
        }

        .table thead th {
            border: 1px solid black;
            padding: 3px;
        }

        .table tbody {
            height: 1100px; 
            overflow-y: auto;
        }

        .small-text {
            font-size: 0.8rem;
        }

        .dri {
            border-bottom: none;
            text-align: center;
            vertical-align: middle;
            width: 18%;
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
    <button class="btn  print-button" style="float: right; margin-right: 60px; margin-top: 0px"
        onclick="window.print()"><span>Print</span></button>
    <button class="btn blue-button" style="float: right; margin-right: 10px; margin-top: 0px"
        onclick="window.history.back()"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
    </svg></span></button>
    <div class="container mt-8">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #e9ecef">
                    <th colspan="8"
                        style="text-align: center; font-size: 1.8rem; padding-top: 5px; padding-bottom: 0px">
                        PhilHealth<br>Bin Card<br>Your Partner in Health<br><br>
                        <p style="text-align: left; font-size: 19px; margin-left: 10px" class="article">Article:
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            dadwadwa</p>
                        <p style="text-align: left; font-size: 19px; margin-left: 10px" class="description">Description:
                        </p>
                    </th>
                </tr>
                <tr>
                    <th colspan="2" rowspan="2"
                        style="border-bottom: none; text-align: center; vertical-align: middle; padding: 17px;" id=dri
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

            </thead>
            <tbody>
            <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 20px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            const itemName = urlParams.get('itemName');
            const date = urlParams.get('request_date');
            const balanceEnd = urlParams.get('balance_end');

            document.getElementById('itemName').textContent = itemName;
            document.getElementById('request_date').textContent = balanceEnd;
            document.getElementById('balance_end').textContent = bqty;

        });
    </script>
</body>

</html>