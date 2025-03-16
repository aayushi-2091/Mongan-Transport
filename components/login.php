<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db_connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `Email`= '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password==$row["Password"]) {
            session_start();
            $_SESSION["login"] = "true";
            $_SESSION["id"] = $row["Id"];
            header("Location:../main/dashboard/dashboard.php");
            exit();
        }
        else {
            header("Location:../index.php");
            
        }
    }
    else {
        header("Location:../index.php");
    }
}
?>