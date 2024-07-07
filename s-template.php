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
    .table-bordered th, .table-bordered td {
        border: 2px solid black !important;
        padding: 0;
    }
    .description-row {
        background-color: #e9ecef;
    }
    .small-text {
        font-size: 0.8rem;
    }
    .table td {
        word-break: break-word; 
        white-space: normal; 
    }
    th[rowspan="2"] {
        text-align: left;
        vertical-align: top;
    }
    .description{
        width: 45%; 
        white-space: normal;
    }
    .item{
        width: 35%; 
    }
    .consume{
        width: 10%;
    }
    .table-bordered {
        margin-top: 0;
    }
    .row {
        margin-bottom: -15px;
    }
</style>


</head>
<body>
<div class="container mt-8">
    <div class="row">
        <div class="col-6 small-text">
            <p>General Form No. 18 <br> Revised Sept. '02</p>
        </div>
        <div class="col-6 small-text text-end">
            <br>
            <p style="float: right">Appendix 38</p>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr class="description-row">
                <th colspan="7" style="text-align:center; font-size: 1.8rem; padding-top: 5px; padding-bottom: 0px">
                    Stock Card<br>Pro NCR Branch<p style="font-size: 1.2rem">Agency</p></th>
            </tr>
            <tr>
                <th colspan="3" rowspan="2" style="border-bottom: none; text-align: left; vertical-align:top" class="item">Item:</th>
                <th colspan="2" rowspan="2" style="border-bottom: none; text-align: left; vertical-align:top" class="description">Description:</th>
                <th colspan="2" class="stockno">Stock No.:</th>
            </tr>
            <tr>
                <th colspan="2" style="text-align: left; border-top: none" class="reorder">Re-order Point:<p></p></th>
            </tr>
            <tr>
                <th rowspan="2" style="text-align: center; vertical-align: middle" class="date">Date</th>
                <th rowspan="2" style="text-align: center; vertical-align: middle" class="reference">Reference</th>
                <th style="text-align: center; vertical-align:top" class="reqceipt">Receipt</th>
                <th colspan="2" style="text-align: center" class="issue">Issuance</th>
                <th style="text-align: center" class="balance">Balance</th>
                <th rowspan="2" style="text-align: center; vertical-align:top" class="consume">No. of days to Consume</th>
            </tr>
            <tr>
                <th style="text-align: center" class="rquantity">Qty</th>
                <th style="text-align: center" class="iquantity">Qty.</th>
                <th style="text-align: center" class="ioffice">Office</th>
                <th style="text-align: center" class="bqty">Qty.</th>
            </tr>
            <td style="text-align: center; vertical-align: middle;">1</td>
            <td style="text-align: center; vertical-align: middle;">2</td>
            <td style="text-align: center; vertical-align: middle;">3</td>
            <td style="text-align: center; vertical-align: middle;">4</td>
            <td style="text-align: center; vertical-align: middle;">5</td>
            <td style="text-align: center; vertical-align: middle; font-size: 23px">6</td>
            <td style="text-align: center; vertical-align: middle;">7</td>
        </thead>
        <tbody id="itemTransactions">
            <!-- Your table body content here -->
        </tbody>
    </table>
</div>
</body>
</html>
