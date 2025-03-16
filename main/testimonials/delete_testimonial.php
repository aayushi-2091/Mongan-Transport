<?php 
include '../../components/db_connect.php';
$id=$_GET['id'];
$sql="DELETE FROM `testimonial` WHERE Id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location: view_testimonial.php?delete_status=1");
}
else{
    header("Location: view_testimonial.php?delete_status=0");
}
?>