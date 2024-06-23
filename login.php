<?php
require 'config.php';
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conne, "SELECT * from userdata where email='$email'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: home.php");
        } else {
            echo "<script>alert('wrong password ')</script>";
        }
    } else {
        echo "<script>alert(' user not register ')</script>";
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
    <link rel="stylesheet" href="a/login.css">
    <link rel="icon" href="img/l.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page">
        <div class="l">
            <a href="index.html"><ion-icon class="back" name="arrow-back-circle-outline"></ion-icon></a>

            <form action="" method="post" autocomplete="off">
                <h1>Login</h1>
                <!-- <input type="text" placeholder="Enter the name" class="   area  name"> -->
                <input type="email" placeholder="Enter the email" name="email" id="email" class=" area  Email" require>
                <input type="password" placeholder="Enter the password" name="password" id="password" class="  area password" require>
                <!-- <input type="password" placeholder="re-Enter the  password" class=" area  Re-password"> -->
                <!-- <input type="button" value="Login" class="loginbtn"> -->
                <button type="submit" name="submit" class="loginbtn">Login</button>

                <p>if you not Register? <a href="signup.php">Click Here</a> Singup</p>
            </form>
        </div>
        <div class="r">
            <!-- <img src="https://plus.unsplash.com/premium_photo-1677194562330-2210f33e2576?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""> -->
            <img src="img/Data_security_05-removebg-preview.png" alt="">
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>