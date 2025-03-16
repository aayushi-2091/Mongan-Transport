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
        <?php require_once "../../includes/nav.php"; ?>
        <div class="container-fluid page-body-wrapper">
            <?php require_once "../../includes/sideber.php"; ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Testimonials</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Commentor</th>
                                                    <th>Comment</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once "../../components/db_connect.php";
                                                $query = "SELECT * FROM testimonial";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<td>{$row['Id']}</td>";
                                                    echo "<td>{$row['Commentor']}</td>";
                                                    echo "<td>{$row['Comment']}</td>";
                                                    echo "<td>
                                                            <a href='edit_testimonial.php?id={$row['Id']}' class='btn btn-warning btn-sm'>Edit</a>
                                                            <a href='delete_testimonial.php?id={$row['Id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                                                        </td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once "../../includes/footer.php"; ?>
            </div>
        </div>
    </div>
    <?php require_once "../../includes/script.php"; ?>
</body>
</html>
