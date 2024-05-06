

<?php
include('co.php');
// $id= $_SESSION["id"];
$id= $_GET['id'];
    
$ql="DELETE FROM userdata where id='$id'";
$data=mysqli_query($conn ,$ql);
if($data){
    echo "<script>alert(`Record Delete`)</script>";
  ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/l/user.php" />


<?php
}
else{
    echo "Record Not Deleted";
}




?>