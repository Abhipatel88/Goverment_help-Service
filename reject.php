



<?php
include("co.php");
$id= $_GET['id'];


    $q = "UPDATE a SET Status = 'Reject' WHERE id = '$id' ";
    $data = mysqli_query($conn,$q);
    // $roq = mysqli_num_rows($data);
    // $result = mysqli_fetch_assoc($data);
// $id = $_POST['id'];
header("location:post.php");

?>