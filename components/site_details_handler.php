<?php
include 'db_connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['Email'];
    $address = $_POST['Address'];

    $uploadDir = '../site_details_upload/';
    if (isset($_FILES['formFile'])) {
        $fileTmpPath = $_FILES['formFile']['tmp_name'];
        $fileName = basename($_FILES['formFile']['name']);
        $fileSize = $_FILES['formFile']['size'];
        $fileType = mime_content_type($fileTmpPath);
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];


        if (in_array($fileType, $allowedTypes)) {
            $destPath = $uploadDir . $fileName;
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $sql = "INSERT INTO `site_details` (`Logo`, `Email`, `Address`) VALUES ('$fileName', '$email', '$address')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "Form submitted successfully";
                } else {
                    echo "Error: ". mysqli_error($conn);
                }
                $id = mysqli_insert_id($conn);
                foreach ($_POST['phone'] as $numbers) {
                    $sql2 = "INSERT INTO `phone_number` (`Site_details_Id`, `Phone number`) VALUES ('$id', '$numbers')";
                    $result2 = mysqli_query($conn, $sql2);
                }
            } 
            else {
                echo "Error: File not uploaded";
            }
        }
    }
}
?>