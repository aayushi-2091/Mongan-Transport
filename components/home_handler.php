<?php
include 'db_connect.php';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $heading=$_POST['heading'];
    $subhead=$_POST['subhead'];
    $uploadDir='../home_upload/';
    if(isset($_FILES['formFile'])){
        $filetempname= $_FILES['formFile']['tmp_name'];
        $filename= basename($_FILES['formFile']['name']);
        $filetype= mime_content_type($filetempname);
        $allowedtypes= ['image/jpg','image/jpeg','image/png'];
        if(in_array($filetype,$allowedtypes)){
            $destpath= $uploadDir . $filename;
            if (move_uploaded_file($filetempname, $destpath)) {
                $sql = "INSERT INTO `home` (`Image`, `Heading`, `SubHeading`) VALUES ('$destpath', '$heading', '$subhead')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "Form submitted successfully";
                } else {
                    echo "Error: ". mysqli_error($conn);
                }
            }
            else {
                echo "Error: File not uploaded";
            }
        }
        else {
            echo "Error: File type is not in .jpg/.jpeg/.png";
        }
    }
}
?>