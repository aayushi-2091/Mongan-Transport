<?php
include 'db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id=$_POST['id'];
    $commentor = $_POST['commentor'];
    $comment = $_POST['comment'];
    if (isset($commentor) && isset($comment)) {
        $sql = "UPDATE `testimonial` SET `Commentor` = '$commentor', `Comment` = '$comment' WHERE Id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Form updated successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Fields not filled.";
    }
}
?>