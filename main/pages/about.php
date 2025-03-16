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
                                    <form class="needs-validation" novalidate
                                        action="../../components/about_handler.php" enctype="multipart/form-data"
                                        method="POST">
                                        <div class="form-row">
                                            <!-- For about image -->
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">Add
                                                    Image</label>
                                                <input class="form-control" type="file" id="formFile" name="formFile"
                                                    accept="image/*" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <!-- For about heading col-md-3  -->
                                            <div class="mb-3 col-12">
                                                <label for="validationCustom03">Heading</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    name="about_heading" placeholder="Heading" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid heading.
                                                </div>
                                            </div>
                                            <!-- For about content -->
                                            <div class="mb-3 col-12">
                                                <label for="validationCustom06">About us Content</label>
                                                <textarea class="form-control" id="validationCustom06"
                                                    name="about_content" placeholder="Enter content here..." rows="5"
                                                    required></textarea>
                                                <div class="invalid-feedback">
                                                    Please provide a valid text.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-3" type="submit">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once "../../includes/footer.php" ?>

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?php require_once "../../includes/script.php" ?>
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