<?php
$server ="localhost";
$username ="root";
$password ="Abhi@8820";
$dbname="login_data";
$conn = mysqli_connect($server,$username,$password,$dbname);
if($conn){
    // echo "connection establish"  ;

}
else{
    echo "connection fails";
}
?>




