<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bin Card</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://www.parfait.com.ph/images/product-icon/philhealth-icon.png">
    <link rel="stylesheet" type="text/css" href="b-style.css">
</head>
<body>
    <button class="btn  print-button" style="float: right; margin-right: 60px; margin-top: 0px"
        onclick="window.print()"><span>Print</span>
    </button>
    <button class="btn blue-button" style="float: right; margin-right: 10px; margin-top: 0px"
        onclick="window.history.back()"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
            </svg></span></button>
    <div class="container mt-8">
    <table class="table">
            <thead>
                <tr style="background-color: #e9ecef" class="phbc">
                    <th colspan="8"
                        style="text-align: center; font-size: 1.8rem; padding-top: 5px; padding-bottom: 0px">
                        PhilHealth<br>Bin Card<br>Your Partner in Health
                    </th>
                </tr>
                <tr style="background-color: #e9ecef;" class="art">
                    <th colspan="1" style="text-align: left; font-size: 19px; border-right: none; border-bottom: none;" class="arti">
                        Article:
                    </th>
                    <th colspan="6" style="font-size: 19px; border-left: none; border-right: none;" class="itemname">
                        <span style="vertical-align: -8px" id="itemName"></span>
                    </th>
                    <th style="border-left: none; border-bottom: none;" class="last1"></th>
                </tr>
                <tr style="background-color: #e9ecef;" class="desc">
                    <th colspan="1" style="font-size: 19px; border-right: none; border-top: none; border-bottom: none" class="descrip">
                        Description:
                    </th>
                    <th colspan="6" style="font-size: 19px; border-left: none; border-right: none;" class="descript">
                        <span style="vertical-align: -8px" id="description"></span>
                    </th>
                    <th style="border-left: none; border-top: none; border-bottom: none" class="last2"></th>
                </tr>
                <tr style="background-color: #e9ecef" class="a">
                    <th style="border-right: none; border-top: none" class="b"></th>
                    <th colspan="6" style="border-left: none; border-right: none;"></th>
                    <th style="border-left: none; border-top: none;" class="last3"></th>
                </tr>
                <tr>
                    <th colspan="2" rowspan="2"
                        style="border-bottom: none; text-align: center; vertical-align: middle; padding: 17px;" id="dri"
                        class="dri">Date<br>Received/Issue</th>
                    <th colspan="2" rowspan="2" style="border-bottom: none; text-align: center; vertical-align: middle"
                        class="sws">SWS/RIS NO. Transaction no.</th>
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
            <tbody class="table-bordered" id="requestHistory">
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td colspan="2" style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px; font-size: 18px"></td>
                    <td style="text-align: center; vertical-align: middle; padding: 1px"></td>
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

        fetchRequestHistory(itemName);
    });

    function fetchRequestHistory(itemName) {
        fetch('get_request_history.php?itemName=' + encodeURIComponent(itemName))
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (Array.isArray(data)) {
                    updateTableWithRequests(data);
                } else {
                    console.error('Invalid data format:', data);
                }
            })
            .catch(error => {
                console.error('Error fetching request history:', error);
                alert('Failed to fetch request history. Please try again later.');
            });
    }

    function updateTableWithRequests(requests) {
        const tableBody = document.querySelector('#requestHistory');
        
        tableBody.innerHTML = '';

        requests.forEach((request, index) => {
            const row = tableBody.insertRow();
            const formattedDate = formatDate(request.request_date);
            row.innerHTML = `
                <td colspan="2" style="text-align: center; vertical-align: middle;">${formattedDate || ''}</td>
                <td colspan="2" style="text-align: center; vertical-align: middle;"></td>
                <td style="text-align: center; vertical-align: middle;"></td>
                <td style="text-align: center; vertical-align: middle;"></td>
                <td style="text-align: center; vertical-align: middle; font-size: 20px;">${request.balance_end || ''}</td>
                <td style="text-align: center; vertical-align: middle;"></td>
            `;
        });

        const numberOfRows = 30;
        const currentRows = tableBody.rows.length;

        for (let i = currentRows; i < numberOfRows; i++) {
            const row = tableBody.insertRow();
            row.innerHTML = `
                <td colspan="2" style="text-align: center; vertical-align: middle;"></td>
                <td colspan="2" style="text-align: center; vertical-align: middle;"></td>
                <td style="text-align: center; vertical-align: middle;"></td>
                <td style="text-align: center; vertical-align: middle;"></td>
                <td style="text-align: center; vertical-align: middle; font-size: 20px;"></td>
                <td style="text-align: center; vertical-align: middle;"></td>
            `;
        }
    }

    function formatDate(dateString) {
        if (!dateString) return '';

        const date = new Date(dateString);
        return date.toISOString().split('T')[0];
    }
</script>
</body>

</html>