<!DOCTYPE html>
<html lang="en">
<?php
require_once "../../includes/header.php";
require_once "../../components/db_connect.php";
$sql = "SELECT * FROM `site_details`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$siteId = $row['Id'];
$sql1 = "SELECT * FROM `phone_number` WHERE `Site_details_Id` = $siteId";
$result1 = mysqli_query($conn, $sql1);
?>

<body>
    <style>
        .card {
            box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
            -webkit-box-shadow: 0 5px 10px 0 #0d6efd;
            -moz-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
            -ms-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
        }
    </style>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php require_once "../../includes/nav.php"; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php require_once "../../includes/sideber.php"; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php if (mysqli_num_rows($result) == 0) { ?>
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate
                                            action="../../components/site_details_handler.php" enctype="multipart/form-data"
                                            method="POST">
                                            <input type="hidden" name="method" value="add">
                                            <div class="form-row">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Add Logo</label>
                                                    <input class="form-control" type="file" id="formFile" name="formFile"
                                                        accept="image/*" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Add phone number(s)</label>
                                                    <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="Menu" required> -->
                                                    <div class="">
                                                        <div class="col-lg-12">
                                                            <div id="row">
                                                            </div>
                                                            <div id="newinput" style="margin-top: 6px;"></div>
                                                            <button id="rowAdder" type="button" class="btn btn-dark">
                                                                <span class="bi bi-plus-square-dotted">
                                                                </span> ADD
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-6">
                                                    <label for="validationCustom03">Email</label>
                                                    <input type="email" class="form-control" id="validationCustom03"
                                                        placeholder="Email" required name="Email">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid email.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-6">
                                                    <label for="validationCustom04">Address</label>
                                                    <input type="text" class="form-control" id="validationCustom04"
                                                        placeholder="Address" required name="Address">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid address.
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary mt-3" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="needs-validation" novalidate
                                            action="../../components/site_details_handler.php" enctype="multipart/form-data"
                                            method="POST">
                                            <input type="hidden" name="method" value="edit">
                                            <input type="hidden" name="updateid" value="<?= $siteId; ?>">
                                            <div class="form-row">
                                                <div class="mb-3">
                                                    <label for="validationCustom01" class="form-label">Add Logo</label>
                                                    <img src="../../site_details_upload/<?= $row['Logo'] ?>"
                                                        alt="Previous Logo" width="100" height="100">

                                                    <!-- Hidden input to store existing logo -->
                                                    <input type="hidden" name="existing_logo" value="<?= $row['Logo'] ?>">

                                                    <input class="form-control" type="file" id="formFile" name="formFile"
                                                        accept="image/*">

                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>


                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Add phone number(s)</label>
                                                    <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="Menu" required> -->
                                                    <div class="">
                                                        <div class="col-lg-12">
                                                            <div id="row">
                                                            </div>
                                                            <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                                                                <div id="newinput" style="margin-top: 6px;">
                                                                    <input type="hidden" name="phoneid"
                                                                        value="<?= $row1['Id']; ?>">
                                                                    <div class="input-group m-3">
                                                                        <div class="input-group-prepend">
                                                                            <button class="btn btn-danger deleteRow"
                                                                                type="button">
                                                                                <i class="bi bi-trash"></i> Delete
                                                                            </button>
                                                                        </div>
                                                                        <input type="tel" class="form-control m-input"
                                                                            value="<?= $row1['Phone number'] ?>" name="phone[]">
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                            <div id="newinput" style="margin-top: 6px;"></div>
                                                            <button id="rowAdder" type="button" class="btn btn-dark">
                                                                <span class="bi bi-plus-square-dotted">
                                                                </span> ADD
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-6">
                                                    <label for="validationCustom03">Email</label>
                                                    <input type="email" class="form-control" id="validationCustom03"
                                                        placeholder="Email" required name="Email"
                                                        value="<?= $row['Email'] ?>">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid email.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-6">
                                                    <label for="validationCustom04">Address</label>
                                                    <input type="text" class="form-control" id="validationCustom04"
                                                        placeholder="Address" required name="Address"
                                                        value="<?= $row['Address'] ?>">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid address.
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary mt-3" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- partial -->
            </div>
            <?php require_once "../../includes/footer.php" ?>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <?php require_once "../../includes/script.php" ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("rowAdder").addEventListener("click", function () {
                let newRow = document.createElement("div");
                newRow.classList.add("input-group", "m-3");

                newRow.innerHTML = `
                <div class="input-group-prepend">
                    <button class="btn btn-danger deleteRow" type="button">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </div>
                <input type="tel" class="form-control m-input" name="phone[]">
            `;

                document.getElementById("newinput").appendChild(newRow);
            });

            document.addEventListener("click", function (e) {
                if (e.target && e.target.classList.contains("deleteRow")) {
                    e.target.closest(".input-group").remove();
                }
            });
        });
    </script>
</body>

</html>