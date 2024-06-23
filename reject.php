<?php
include("co.php");
$id = $_GET['id'];


$q = "UPDATE a SET Status = 'Reject' WHERE id = '$id' ";
$data = mysqli_query($conn, $q);

header("location:post.php");
