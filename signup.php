<?php
require 'config.php';
if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email=$_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["Repassword"];
    $duplicate = mysqli_query($conne , "select * from userdata where email='$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo "<script>alert(' email alerdy ')</script>";
    }
    else{
        if($password == $repassword){
            // $q="insert into `login_data`.`userdata` values ('', '$name', '$email', '$password')";
            $sql = "INSERT INTO `login_data`.`userdata` (`name`,`email`,`password`) VALUES ('$name','$email','$password');";

            mysqli_query($conne,$sql);
        echo "<script>alert('success ')</script>";


        }
        else{
            echo "<script>alert('password not match')</script>";
        }
    }

}

?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Gov. Help and Service</title>
    <link rel="stylesheet" href="a/signup.css">
    <link rel="icon" href="img/l.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page">
        <div class="l">
            <a href="index.html"><ion-icon class="back" name="arrow-back-circle-outline"></ion-icon></a>

            <!-- <img src="https://plus.unsplash.com/premium_photo-1681487916420-8f50a06eb60e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""> -->
            <img src="img/6538623-transformed.png" alt="">
        </div>
        
        <div class="r">
            <form class="" action="" method="post" autocomplete="off">
                <h1>Sign Up</h1>
                <input type="text" placeholder="Enter the name"  name="name" id="name" class="   area  name">
            <input type="email" placeholder="Enter the email" name="email" id="email" class=" area  Email">
            <input type="password" placeholder="Enter the password" name="password" id="password" class="  area password">
            <input type="password" placeholder="re-Enter the  password" name="Repassword" id="Repassword" class=" area  Re-password">
            <!-- <input type="button" value="Sing up" class="loginbtn"> -->
            <button type="submit"  class="loginbtn"  name="submit">submit</button>
            <p>if you alredy Register? <a href="http://localhost/l/login.php">Click Here</a> login</p>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>