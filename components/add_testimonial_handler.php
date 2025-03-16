<?php
include 'db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $commentor = $_POST['commentor'];
    $comment = $_POST['comment'];
    if (isset($commentor) && isset($comment)) {
        $sql = "INSERT INTO `testimonial` (`Commentor`, `Comment`) VALUES ('$commentor', '$comment')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Form submitted successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Fields not filled.";
    }
}
?>