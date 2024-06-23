<?php
include("co.php");
$id = $_GET['id'];
$q = "select * from a where id='$id'";
$data = mysqli_query($conn, $q);
$roq = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- title -->
  <title>Gov. Help and Service</title>

  <!-- tab bar logo  -->
  <link rel="icon" href="img/l.png" />
  <link rel="stylesheet" href="a/index.css">
  <link rel="stylesheet" href="a/com.css">
  <link rel="stylesheet" href="a/phone.css">
  <!-- remix icons cdn  -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <div id="main">



    <!--top bar background -->
    <div class="top-bar">
      <div class="top-bar-img">
        <img src="https://media.umangapp.in/cdn/landing/theme/icons/emblem-mobile.svg" alt="" />
        <img src="https://media.umangapp.in/cdn/landing/theme/icons/akam-logo.svg" alt="" />
        <img class="ba" src="https://media.umangapp.in/cdn/landing/theme/icons/di.svg" alt="" />
      </div>
      <select class="l-btn" name="language" id="language">
        <option value="en">English</option>
        <option value="hi">Hindi</option>
      </select>
      <!-- <button class="l-btn ">English</button>
        <div class="lang-box">
            <a href="3">English</a>
            <a href="$">hindi</a>
            <a href="#">gujarati</a>
        </div> -->
    </div>
    <!--Navigation bar -->
    <div class="nav">
      <div class="l">
        <img src="Screenshot_2024-02-15_234915-removebg-preview (1).png" alt="" />
      </div>
      <div class="r">
        <a href="index.php">Home</a>
        <a href="aflabout.html">About</a>
        <a class="curr" href="com.php">Complain</a>
        <a href="aflblog.html">Blogs</a>
        <a href="desh.php">Deshboard</a>
        <ion-icon class="search" name="search-outline"></ion-icon>
        <a class="login-btn" href="login.php">Login</a>
      </div>
      <div class="mobile-bar">
        <ion-icon class="mobile-btn" name="search-outline"></ion-icon>
        <ion-icon class="mobile-btn" name="menu-outline"></ion-icon>
        <ion-icon class="mobile-btn" name="close-outline"></ion-icon>
      </div>
    </div>

    <!-- page1 -->
    <div class="page1 scroll-soomth">

      <form action="" method="post" enctype="multipart/form-data">
        <h1>Update Your Complain</h1>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $result['name']; ?>" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $result['email']; ?>" required><br>
        <label for="phone">Phone number:</label><br>
        <input type="tel" id="phone" name="phone" value="<?php echo $result['phone']; ?>" required><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" value="<?php echo $result['adrees']; ?>" required><br>
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city" value="<?php echo $result['city']; ?>" required><br>
        <label for="state">State:</label><br>
        <input type="text" id="state" name="state" value="<?php echo $result['state']; ?>" required><br>
        <label for="pin_code">Pin Code:</label><br>
        <input type="text" id="pin_code" name="pin_code" value="<?php echo $result['pincode']; ?>" required><br>
        <label for="municipal_office">Nearest Municipal Office:</label><br>
        <input type="text" id="municipal_office" name="municipal_office" value="<?php echo $result['municipal']; ?>" required><br>
        <label for="complaint">Enter your complaint:</label><br>
        <textarea id="complaint" name="complaint" rows="4" cols="50" required><?php echo $result['com']; ?></textarea><br>
        <label for="attachment">Add attachment: </label><br>
        <input type="file" id="attachment" name="attachment" value="<?php echo $result['attach']; ?>" accept="image/*, video/*"><br>
        <input type="submit" id="submit" name="submit" value="Submit">
        <!-- <button >Submit</button> -->
      </form>

    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
  <script src="com.js"></script>
</body>

</html>


<?php
if ($_POST['submit']) {


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pin_code = $_POST['pin_code'];
  $municipal_office = $_POST['municipal_office'];
  $complaint = $_POST['complaint'];
  // $attachment = $_POST['attachment'];


  // INSERT INTO `a` ( `name`, `email`, `phone`, `adrees`, `city`, `state`, `pincode`, `municipal`, `com`, `attach`) VALUES (NULL, 'C', 'abhipatel08820@gmail.com', '98599592', 'sdcasc', 'SCK ', 'SMCL', '32656', 'bsdjhbsd', 'kjnfb s', '');
  //  $q= "INSERT INTO  `a` (`name`, `email`, `phone`, `adrees`, `city`, `state`, `pincode`, `municipal`, `com`, `attach`) VALUES('$name','$email','$phone','$address','$city','$state','$pin_code','$municipal_office','$complaint','$attachment');";
  $q = "UPDATE a SET name='$name', email='$email', phone='$phone', adrees='$address', city='$city', state='$state', pincode='$pin_code',municipal='$municipal_office', com='$complaint',  WHERE id='$id'";

  $data = mysqli_query($conn, $q);


  if ($data) {
    echo "<script>alert(`Record Updated`)</script>";
?>
    <meta http-equiv="refresh" content="0; url =http://localhost/l/desh.php" />


<?php

  } else {
    echo "<script>alert(`ERRRR`)</script>";
  }
}

?>