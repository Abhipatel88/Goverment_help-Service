<?php
include('co.php');
require 'config.php';

$id= $_GET['id'];
    
$q="DELETE FROM a where id='$id'";
$data=mysqli_query($conn ,$q);
if($data){
    echo "<script>alert(`Record Delete`)</script>";
  ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/l/desh.php" />


<?php
}
else{
    echo "Record Not Deleted";
}




?>