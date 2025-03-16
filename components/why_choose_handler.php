<?php
include 'db_connect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $heading=$_POST['why_choose_heading'];
    $content=$_POST['why_choose_content'];
    $uploadDir= '../why_choose_upload/';
    if(isset($_FILES['formFile'])){
        $filetemppath= $_FILES['formFile'] ['tmp_name'];
        $filename= basename($_FILES['formFile']['name']);
        $filetype= mime_content_type($filetemppath);
        $allowedtypes= ['image/jpg', 'image/jpeg', 'image/png'];
        if(in_array($filetype,$allowedtypes)){
            $destpath= $uploadDir . $filename;
            if(move_uploaded_file( $filetemppath,$destpath)){
                $sql="INSERT INTO `whychoose` (`Image`, `Heading`, `Content`) VALUES ('$filename', '$heading', '$content')";
                $result= mysqli_query($conn, $sql);
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