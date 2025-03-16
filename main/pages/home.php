<!DOCTYPE html>
<html lang="en">
<?php
require_once "../../includes/header.php"; ?>

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
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" novalidate action="../../components/home_handler.php"
                                        enctype="multipart/form-data" method="POST">
                                        <div class="form-row">
                                            <!-- For banner background image -->
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Add Banner
                                                    Image(s)</label>
                                                <input class="form-control" type="file" id="formFile" name="formFile"
                                                    accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <!-- For banner heading -->
                                            <div class="mb-3 col-6">
                                                <label for="validationCustom03">Heading</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    name="heading" placeholder="Heading" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid heading.
                                                </div>
                                            </div>
                                            <!-- For banner sub-heading -->
                                            <div class="mb-3 col-6">
                                                <label for="validationCustom04">Sub Heading</label>
                                                <input type="text" class="form-control" id="validationCustom04"
                                                    name="subhead" placeholder="Sub Heading" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Sub-Heading.
                                                </div>
                                            </div>
                                            <!-- For adding buttons and their respective links -->
                                            <!-- <div class="col-md-5 mb-3">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom02">Add Button(s) and Link(s)</label>
                                                </div>

                                                <div id="buttonInputs" style="margin-top: 6px;"></div>

                                                <button id="addButton" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted"></span> ADD
                                                </button>
                                            </div> -->

                                            <!-- <div class="col-md-3 mb-3">
                                                <label for="validationCustom05">About us Heading</label>
                                                <input type="text" class="form-control" id="validationCustom05"
                                                    placeholder="Heading" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Heading.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationCustom06">About us Content</label>
                                                <input type="text" class="form-control" id="validationCustom06"
                                                    placeholder="content" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid text.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div> -->
                                            <button class="btn btn-primary mt-3" type="submit">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <!-- container-scroller -->
    <?php require_once "../../includes/script.php" ?>
    <!-- JS for handling button and their link fields -->
    <!-- <script>
        $(document).ready(function () {
            let counter = 1;
            $('#addButton').click(function () {
                $('#buttonInputs').append(`
                    <div class="input-group mb-2" id="buttonField${counter}">
                        <input type="text" class="form-control" placeholder="Enter button name" name="buttonNames[]">
                        <input type="text" class="form-control" placeholder="Enter link" name="links[]">
                        <button class="btn btn-danger removeButton" type="button" data-id="${counter}">Remove</button>
                    </div>
                `);
                counter++;
            });

            $(document).on('click', '.removeButton', function () {
                let id = $(this).data('id');
                $('#buttonField' + id).remove();
            });
        });
    </script> -->
    <!-- JS for required fields -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let form = document.querySelector(".needs-validation");

            form.addEventListener("submit", function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            }, false);
        });
    </script>
</body>

</html>