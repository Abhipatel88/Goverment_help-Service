<?php
include("co.php");
$id = $_GET['id'];
$q = "select * from a where id='$id'";
$data = mysqli_query($conn, $q);
$roq = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


// error_reporting(0);
require 'config.php';
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conne, "SELECT * from userdata where id = '$id'");
  $row = mysqli_fetch_assoc($result);
}
$id = $_GET['id'];
$q = "select * from a where id='$id'";
$data = mysqli_query($conn, $q);
$roq = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- main css  -->
  <link rel="stylesheet" href="a/style.css" />

  <!-- phone css -->
  <link rel="stylesheet" href="a/phone.css" />

  <!-- photo css  -->
  <link rel="stylesheet" href="a/photo.css">

  <!-- locomotive css cdn  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css" />

  <!-- remix icons cdn  -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

  <!-- title -->
  <title>Gov. Help and Service</title>

  <!-- tab bar logo  -->
  <link rel="icon" href="img/l.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="fasas">


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
        <img src="img/Screenshot_2024-02-15_234915-removebg-preview (1).png" alt="" />
      </div>
      <div class="r">
        <a href="home.php">Home</a>
        <a href="aflabout.php">About</a>
        <a href="com.php">Complain</a>
        <a href="aflblog.php">Blogs</a>
        <a class="curr" href="desh.php">Deshboard</a>
        <ion-icon class="search" name="search-outline"></ion-icon>
        <!-- <a class="login-btn" href="login.php">Login</a> -->
        <ion-icon class="profile" style="font-size: 2rem;" name="person-circle-outline"></ion-icon>

        <h5 style="font-size: 1rem;text-transform:uppercase"><?php echo $row['name'] ?></h5>

        <a href="index.html">logout</a>

      </div>
      <div class="mobile-bar">
        <ion-icon class="mobile-btn" name="search-outline"></ion-icon>
        <ion-icon class="mobile-btn" name="menu-outline"></ion-icon>
        <ion-icon class="mobile-btn" name="close-outline"></ion-icon>
      </div>
    </div>

    <!-- page1 -->
    <div class="details">
      <div class="l">
        <a href="desh.php">
          <h3>Back</h3>
        </a>
        <h4><span>ID:</span> <?php echo $result['id'] ?></h4>
        <h4><span>NAME:</span> <?php echo  $result['name'] ?></h4>
        <h4><span>EMAIL:</span> <?php echo  $result['email'] ?></h4>
        <h4><span>PHONE:</span> <?php echo  $result['phone'] ?></h4>
        <h4><span>ADRESS:</span> <?php echo  $result['adrees'] ?></h4>
        <h4><span>CITY:</span> <?php echo  $result['city'] ?></h4>
        <h4><span>STATE:</span> <?php echo $result['state'] ?></h4>
        <h4><span>PINCODE:</span> <?php echo  $result['pincode'] ?></h4>
        <h4><span>MUNICIPAL:</span> <?php echo  $result['municipal'] ?></h4>
        <h4><span>COMPLAINT:</span> <?php echo  $result['com'] ?></h4>


      </div>
      <div class="r">
        <div class="v">
          <h1>Photo's of Complain</h1>
          <?php
          $fileType = strtolower(pathinfo($result['attach'], PATHINFO_EXTENSION));
          if ($fileType == "png" || $fileType == "jpg") { ?>
            <img src="<?php echo $result['attach'] ?>" alt="">

          <?php   } else { ?>
            <video class="video" controls src="<?php echo $result['attach'] ?>"></video>

          <?php   }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!--For icon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!--main js  -->
  <script src="js/index.js"></script>

</body>

</html>