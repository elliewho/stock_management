<?php include 'db_connect.php'; ?>
<?php include 'fetch_item.php'; ?>
<?php include 'fetch_request.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Stock Management System ----- by Elizardo Aguirre</title>
    <link rel="icon" type="image/x-icon" href="https://www.parfait.com.ph/images/product-icon/philhealth-icon.png">
    <style>
    </style>
</head>

<body background="bgs.png" style="background-color: #4ca64c; background-repeat: no-repeat; background-size: cover">
    <div class="center-container">
        <div class="card custom-card">
            <div class="card-header text-center" style="background-color: #cccccc">
                <h3><strong>Stock Management System</strong></h3>
            </div>
            <div class="card-body" style="background-color: #ffedcc; padding-top: 25px">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#invModal" style="background-color: #4ca64c;">
                            <strong>Inventory</strong>
                        </button>
                    </div>
                    <div class="col-md-6 mb-3">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#reqModal" style="background-color: #4ca64c">
                            <strong>Request</strong>
                        </button>
                    </div>
                    <div class="col-md-6 mb-3">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#stockModal" style="background-color: #4ca64c">
                            <strong>Stock Card</strong>
                        </button>
                    </div>
                    <div class="col-md-6 mb-3">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#binModal" style="background-color: #4ca64c">
                            <strong>Bin Card</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--inventory modal-->
    <div class="modal fade" id="invModal" aria-hidden="true" aria-labelledby="inventoryModal" tabindex="-1"
        role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalToggleLabel"><strong>Inventory</strong></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="reloadPage();"></button>
                </div>
                <div class="modal-body" style="padding: 15px">
                    <div style="display: flex; justify-content: space-between;">
                        <h4 style="text-align: center; flex-grow: 1; margin-bottom: 20px;"><strong>Office
                                Supply</strong></h4>
                        <ul class="pagination" style="margin-bottom: 20px">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#rModal">
                                <i class="bi bi-arrow-right-short"></i>
                            </button>
                        </ul>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2" style="text-align: center" name="item_name">Item Name</th>
                                <th rowspan="2" style="text-align: center" name="balance_start">Balance as of</th>
                                <th rowspan="2" style="text-align: center" name="received">No. of Supplies Received</th>
                                <th rowspan="2" style="text-align: center" name="utilization">Utilization</th>
                                <th rowspan="2" style="text-align: center" name="balance_end">Balance as of</th>
                                <th rowspan="2" style="text-align: center" name="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                $result->data_seek(0);
                                while ($row = $result->fetch_assoc()) {
                                    if ($row["category"] == "Office Supply") {
                                        $total_received_quantity = $row["receivedQuantity"];

                                        echo "<tr>";
                                        echo "<td style='text-align: center'>" . $row["item_name"] . "</td>";
                                        echo "<td style='text-align: center'>" . $row["quantity"] . "</td>";
                                        echo "<td style='text-align: center'>" . $total_received_quantity . "</td>";
                                        echo "<td style='text-align: center'>" . $row["utilization"] . "</td>"; // Utilization (to be added)
                                        echo "<td style='text-align: center'>" . $row["balance_end"] . "</td>";
                                        echo "<td style='text-align: center'>
                                        <button class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#updateModal' onclick='setUpdateModalData(" . json_encode($row) . ")'>
                                            <i class='bi bi-plus-slash-minus'></i>
                                        </button>
                                        <button class='btn btn-danger btn-sm delete-btn' data-id='" . $row["id"] . "'>
                                            <i class='bi bi-backspace'></i>
                                        </button>
                                    </td>";
                                        echo "</tr>";
                                    }
                                }
                            } else {
                                echo "<tr><td colspan='6' style='text-align: center'>No items found</td></tr>";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"
                        data-bs-dismiss="modal"><i class="bi bi-plus-circle"></i> Add Item</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#secModal"
                        data-bs-dismiss="modal"><i class="bi bi-eye"></i> View Request by Section</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setUpdateModalData(row) {
            document.getElementById('itemId').value = row.id;
            document.getElementById('itemName').value = row.item_name;
            document.getElementById('balanceStart').value = row.quantity;
            document.getElementById('received').value = row.received;
        }

        function submitUpdateForm() {
            // Add your form submission logic here
            document.getElementById('updateForm').submit();
        }
    </script>

    <!--right turn-->
    <div class="modal fade slide-left" id="rModal" aria-hidden="true" aria-labelledby="rModalLabel" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="rModalLabel"><strong>Inventory</strong></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 15px">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h4 style="text-align: center; flex-grow: 1; margin-bottom: 20px;"><strong>IT Supply</strong>
                        </h4>
                        <button type="button" class="btn btn-primary btn-md" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi bi-arrow-left-short"></i>
                        </button>
                        </h4>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2" style="text-align: center" name="item_name">Item Name</th>
                                <th rowspan="2" style="text-align: center" name="balance_start">Balance as of</th>
                                <th rowspan="2" style="text-align: center" name="received">No. of Supplies Received</th>
                                <th rowspan="2" style="text-align: center" name="utilization">Utilization</th>
                                <th rowspan="2" style="text-align: center" name="balance_end">Balance as of</th>
                                <th rowspan="2" style="text-align: center" name="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="reloadPage();">
                        <i class="bi bi-box-arrow-left"></i></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setUpdateModalData(row) {
            document.getElementById('itemId').value = row.id;
            document.getElementById('itemName').value = row.item_name;
            document.getElementById('balanceStart').value = row.quantity;
            document.getElementById('received').value = row.received;
        }

        function submitUpdateForm() {
            // Add your form submission logic here
            document.getElementById('updateForm').submit();
        }
    </script>

    <!--update modal-->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateForm" action="update.php" method="post">
                        <div class="mb-3">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="itemName" name="itemName" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="balanceStart" class="form-label">Balance as of</label>
                            <input type="number" class="form-control" id="balanceStart" name="balanceStart" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="received" class="form-label">Number of Supplies Received</label>
                            <input type="number" class="form-control" id="received" name="received" required>
                        </div>
                        <input type="hidden" id="itemId" name="itemId">
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><i
                            class="bi bi-box-arrow-left"></i></button>
                    <button type="button" class="btn btn-success" id="updateButton" onclick="submitUpdateForm()"><i
                            class="bi bi-check-lg"></i></button>

                </div>
            </div>
        </div>
    </div>
    <script>
        function submitUpdateForm() {
            // Display SweetAlert confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // User confirmed, submit the form
                    console.log('Update button clicked');
                    document.getElementById('updateForm').submit();
                }
            });
        }
    </script>


    <!--add item modal-->
    <div class="modal fade show" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered d-flex align-items-center" role="document">
            <div class="modal-content" style="width: 90%; margin: auto;">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel" style="flex-grow: 1; text-align: center;"><strong>Add
                            Item(s)</strong></h5>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <form action="insert_item.php" method="post" style="width: 80%;">
                        <div class="form-group">
                            <label for="itemName">Item Name</label>
                            <input type="text" class="form-control" id="itemName" name="item_name"
                                placeholder="Enter Item Name" required>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                placeholder="Enter Quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description"
                                placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="" disabled selected>--Select a category--</option>
                                <option value="Office Supply">Office Supply</option>
                                <option value="IT Supply">IT Supply</option>
                            </select>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-secondary" data-bs-target="#invModal" data-bs-toggle="modal"
                                data-bs-dismiss="modal"><i class="bi bi-arrow-left-circle"></i></button>
                            <button type="submit" class="btn btn-success">Add Item</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--sec modal-->
    <div class="modal fade" id="secModal" aria-hidden="true" aria-labelledby="secModalLabel" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="secModalLabel"><strong>Request by Section</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center; width: auto;">Item Name</th>
                                <th style="text-align: center; width: auto;">MALASAKIT/CARES</th>
                                <th style="text-align: center; width: auto;">MST/OM</th>
                                <th style="text-align: center; width: auto;">MEMSEC</th>
                                <th style="text-align: center; width: auto;">COLSEC</th>
                                <th style="text-align: center; width: auto;">BAS</th>
                                <th style="text-align: center; width: auto;">LHIO QC</th>
                                <th style="text-align: center; width: auto;">LHIO RIZAL</th>
                                <th style="text-align: center; width: auto;">LHIO FAIRVIEW</th>
                                <th style="text-align: center; width: auto;">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'db_connect.php';
                            // Fetch items and their totals per destination
                            $sql = "SELECT item_name,
                                SUM(CASE WHEN destination = 'MALASAKIT / CARES' THEN quantity ELSE 0 END) AS malasakit_cares,
                                SUM(CASE WHEN destination = 'MTS / OM' THEN quantity ELSE 0 END) AS mts_om,
                                SUM(CASE WHEN destination = 'MEMSEC' THEN quantity ELSE 0 END) AS memsec,
                                SUM(CASE WHEN destination = 'COLSEC' THEN quantity ELSE 0 END) AS colsec,
                                SUM(CASE WHEN destination = 'BAS' THEN quantity ELSE 0 END) AS bas,
                                SUM(CASE WHEN destination = 'LHIO QC' THEN quantity ELSE 0 END) AS lhio_qc,
                                SUM(CASE WHEN destination = 'LHIO RIZAL' THEN quantity ELSE 0 END) AS lhio_rizal,
                                SUM(CASE WHEN destination = 'LHIO FAIRVIEW' THEN quantity ELSE 0 END) AS lhio_fairview,
                                SUM(quantity) AS total
                                FROM request
                                GROUP BY item_name";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['item_name']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['malasakit_cares']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['mts_om']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['memsec']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['colsec']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['bas']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['lhio_qc']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['lhio_rizal']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['lhio_fairview']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['total']) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='10'>No requests found</td></tr>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="reloadPage()"><i
                                class="bi bi-box-arrow-left"></i></button><!--back-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function reloadPage() {
            window.location.reload();
        }
    </script>


    <!--request modal-->
    <div class="modal fade" id="reqModal" aria-hidden="true" aria-labelledby="reqModalLabel" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="requestModalLabel"><strong>Create Request</strong></h5>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <form action="insert_request.php" method="post" style="width: 80%;">
                        <div class="form-group">
                            <label for="item_name">Item Name</label>
                            <select class="form-control" id="item_name" name="item_name" required>
                                <option value="" disabled selected>--Select an Item Name--</option>
                                <?php
                                include 'db_connect.php';

                                $sql = "SELECT * FROM items";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . htmlspecialchars($row['item_name']) . "'>" . htmlspecialchars($row['item_name']) . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No items found</option>";
                                }

                                $conn->close();
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                placeholder="Enter Quantity" required>
                        </div>
                        <div class="form-group">
                            <label for="destination">Destination</label>
                            <select class="form-control" id="destination" name="destination" required>
                                <option value="" disabled selected>--Select a Destination--</option>
                                <option value="MALASAKIT / CARES">MALASAKIT / CARES</option>
                                <option value="MTS / OM">MTS / OM</option>
                                <option value="MEMSEC">MEMSEC</option>
                                <option value="COLSEC">COLSEC</option>
                                <option value="BAS">BAS</option>
                                <option value="LHIO QC">LHIO QC</option>
                                <option value="LHIO RIZAL">LHIO RIZAL</option>
                                <option value="LHIO FAIRVIEW">LHIO FAIRVIEW</option>
                            </select>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="request_date">Date</label>
                            <input type="hidden" class="form-control" id="requestdate" name="request_date">
                            <input type="text" class="form-control" id="display_requestdate" disabled>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal"
                                onclick="reloadPage()"><i class="bi bi-box-arrow-left"></i></button><!--back-->
                            <button type="submit" class="btn btn-success">Add Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--stock card modal-->
    <div class="modal fade animate__animated animate__fadeInLeft" id="stockModal" tabindex="-1"
        aria-labelledby="stockModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header sticky-top bg-light">
                    <h5 class="modal-title" id="modal3Label" style="flex-grow: 1; text-align: center;"><strong>Stock
                            Card</strong></h5>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center" style="margin-top: 5px;">
                        <div class="input-group" style="width: 70%;">
                            <input type="text" class="form-control" id="searchBar" placeholder="Search files..."
                                maxlength="30">
                            <button class="btn btn-primary" type="button" id="searchButton"><i
                                    class="bi bi-search"></i></button>
                        </div>
                        <button class="btn btn-success ms-2" type="button" id="uploadButton"><i
                                class="bi bi-upload"></i> Upload</button>
                    </div>
                    <div class="mt-4">
                        <!-- File list -->
                        <ul class="list-group mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="item_name"></i>example items
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary me-2"><i
                                            class="bi bi-download"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </div>
                            </li>
                            <!-- Add more files as needed -->
                        </ul>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="reloadPage()"><i
                            class="bi bi-box-arrow-left"></i></button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal"><i
                            class="bi bi-printer"></i></button>
                </div>
            </div>
        </div>
    </div>


    <!--bin card modal-->
    <div class="modal fade animate__animated animate__fadeInLeft" id="binModal" tabindex="-1" aria-labelledby="binModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal3Label" style="flex-grow: 1; text-align: center;"><strong>Stock
                            Card</strong></h5>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center" style="margin-top: 5px;">
                        <div class="input-group" style="width: 70%;">
                            <input type="text" class="form-control" id="searchBar" placeholder="Search files..."
                                maxlength="30">
                            <button class="btn btn-primary" type="button" id="searchButton"><i
                                    class="bi bi-search"></i></button>
                        </div>
                        <button class="btn btn-success ms-2" type="button" id="uploadButton"><i
                                class="bi bi-upload"></i> Upload</button>
                    </div>
                    <div class="mt-4">
                        <!-- File list -->
                        <ul class="list-group mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="item_name"></i>acetate
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary me-2"><i
                                            class="bi bi-download"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </div>
                            </li>
                            <!-- Add more files as needed -->
                        </ul>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal" onclick="reloadPage()"><i
                            class="bi bi-box-arrow-left"></i></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.delete-btn').click(function () {
                var rowId = $(this).data('id');

                // Using SweetAlert for confirmation
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // User confirmed deletion
                        $.ajax({
                            url: 'delete.php',
                            type: 'POST',
                            data: { id: rowId },
                            success: function (response) {
                                if (response == 'success') {
                                    // Remove the table row if deletion was successful
                                    $(this).closest('tr').remove();
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"
                                    });
                                } else {
                                    // Alert if deletion failed
                                    Swal.fire({
                                        title: "Error",
                                        text: "Failed to delete item. Please try again.",
                                        icon: "error"
                                    });
                                }
                            }.bind(this),
                            error: function () {
                                // Alert if AJAX request fails
                                Swal.fire({
                                    title: "Error",
                                    text: "Error occurred while deleting item.",
                                    icon: "error"
                                });
                            }
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        // User clicked cancel, show a message
                        Swal.fire({
                            title: "Cancelled",
                            text: "Your file is safe hahahaha",
                            icon: "error"
                        });
                    }
                });
            });
        });
    </script>

    <script>
        function reloadPage() {
            location.reload();
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const requestModal = document.getElementById('reqModal');
            requestModal.addEventListener('shown.bs.modal', function () {
                const dateInput = document.getElementById('requestdate');
                const displayDateInput = document.getElementById('display_requestdate');
                const now = new Date();
                const year = now.getFullYear();
                const month = (now.getMonth() + 1).toString().padStart(2, '0');
                const day = now.getDate().toString().padStart(2, '0');
                const hours = now.getHours().toString().padStart(2, '0');
                const minutes = now.getMinutes().toString().padStart(2, '0');
                const seconds = now.getSeconds().toString().padStart(2, '0');
                const formattedDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
                dateInput.value = formattedDate;
                displayDateInput.value = formattedDate;
            });
        });
    </script>

    <script>
        document.getElementById('rModal').addEventListener('show.bs.modal', function () {
            // Close all modals except for the rModal
            var allModals = document.querySelectorAll('.modal');
            allModals.forEach(function (modal) {
                if (modal.id !== 'rModal' && modal.classList.contains('show')) {
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const backButton = document.querySelector('.back-to-inventory');
            backButton.addEventListener('click', function () {
                const rModal = document.getElementById('rModal');
                const invModal = document.getElementById('invModal');
                // Close the rModal
                const rModalInstance = bootstrap.Modal.getInstance(rModal);
                rModalInstance.hide();
                // Open the invModal
                const invModalInstance = bootstrap.Modal.getInstance(invModal);
                invModalInstance.show();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const updateModalButtons = document.querySelectorAll('.btn-success');

            updateModalButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const rModal = document.getElementById('rModal');
                    const rModalInstance = bootstrap.Modal.getInstance(rModal);
                    rModalInstance.hide();
                });
            });
        });
    </script>


</body>

</html>