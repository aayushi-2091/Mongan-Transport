<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mongan-transport";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Some error occured");
}
?>