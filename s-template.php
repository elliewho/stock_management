<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Card</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://www.parfait.com.ph/images/product-icon/philhealth-icon.png">
<style>
        body {
            font-family: Georgia, Times, Times New Roman, serif;
        }

        @media print {
            .print-button, .blue-button {
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

        .table thead th,
        .table tbody td {
            border: 1px solid black;

        }

        .table thead th {
            border: 1px solid black;
            padding: 3px;
        }

        .table tbody {
            height: 1150px;
            overflow-y: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .small-text {
            font-size: 0.8rem;
        }
        
        .description-row {
            background-color: #e9ecef;
        }

        .table td {
            word-break: break-word;
            white-space: normal;
        }

        th[rowspan="2"] {
            text-align: left;
            vertical-align: top;
        }

        .description {
            width: 45%;
            white-space: normal;
        }

        .item {
            width: 35%;
        }

        .reference {
            width: 10%;
        }

        .consume,
        .bqty,
        .receipt,
        .rqty {
            width: 10%;
        }

        .table-bordered {
            margin-top: 0;
        }

        .iqty {
            width: 10%;
        }

        .date,
        .reference {
            width: 13%;
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
    <button class="btn print-button" style="float: right; margin-right: 60px; margin-top: 0px"
        onclick="window.print()"><span>Print</span></button>
        <button class="btn blue-button" style="float: right; margin-right: 10px; margin-top: 0px"
        onclick="window.history.back()"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
            </svg></span></button>
    <div class="container mt-4">
        <div class="row" style="margin-bottom: -15px;">
            <div class="col-6 small-text">
                <p><strong>General Form No. 18 <br> Revised Sept. '02</strong></p>
            </div>
            <div class="col-6 small-text text-end">
                <br>
                <p style="float: right"><strong>Appendix 38</strong></p>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr class="description-row">
                    <th colspan="7" style="text-align:center; font-size: 1.8rem; padding-top: 5px; padding-bottom: 0px">
                        Stock Card<br>Pro NCR Central Branch<p style="text-align: center; font-size: 1.2rem">Agency</p>
                    </th>
                </tr>
                <tr>
                    <th colspan="3" rowspan="2" style="text-align: left; vertical-align: top;" class="item">Item:
                        <p style="font-size: 18px; text-align: center; vertical-align: middle"
                            id="itemName"></p>
                    </th>
                    <th colspan="2" rowspan="2" style="text-align: left; vertical-align: top" class="descrip">
                        Description:
                        <p style="font-size: 18px; text-align: center; vertical-align: middle"
                            id="description"></p>
                    </th>
                    <th colspan="2" class="stockno">Stock No.:</th>
                </tr>
                <tr>
                    <th colspan="2" style="text-align: left; vertical-align: middle" class="reorder">Re-order Point:<p></p></th>
                </tr>
                <tr>
                    <th rowspan="2" style="text-align: center; vertical-align: middle" class="date">Date</th>
                    <th rowspan="2" style="text-align: center; vertical-align: middle" class="reference">Reference</th>
                    <th style="text-align: center; vertical-align:top" class="reqceipt">Receipt</th>
                    <th colspan="2" style="text-align: center" class="issue">Issuance</th>
                    <th style="text-align: center" class="balance">Balance</th>
                    <th rowspan="2" style="text-align: center; vertical-align:top" class="consume">No. of days to
                        Consume</th>
                </tr>
                <tr>
                    <th style="text-align: center" class="rqty">Qty</th>
                    <th style="text-align: center" class="iqty">Qty.</th>
                    <th style="text-align: center" class="ioffice">Office</th>
                    <th style="text-align: center" class="bqty">Qty.</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr><tr>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                    <td style="text-align: center; vertical-align: middle; font-size: 20px; padding: 0"></td>
                    <td style="text-align: center; vertical-align: middle"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const itemName = urlParams.get('itemName');

    document.getElementById('itemName').textContent = itemName;

    fetch('get_description.php?itemName=' + encodeURIComponent(itemName))
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json(); 
        })
        .then(data => {
            if (data && data.description) {
                document.getElementById('description').textContent = data.description;
            } else {
                document.getElementById('description').textContent = '';
            }
        })
        .catch(error => {
            console.error('Error fetching description:', error);
            document.getElementById('description').textContent = 'Error loading description';
        });
});

    </script>  
</body>

</html>
