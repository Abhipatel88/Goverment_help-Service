<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result =mysqli_query($conne, "SELECT * from userdata where id = '$id'");
    $row = mysqli_fetch_assoc($result);

}
else{
    header("location: login.php");
}


?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="a/index.css">
    <link rel="stylesheet" href="a/phone.css">
    <link rel="stylesheet" href="a/blog.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
     <!-- title -->
     <title>Gov. Help and Service</title>

<!-- tab bar logo  -->
<link rel="icon" href="img/l.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
<div id="main">

 <!--top bar background --> 
 <div class="top-bar">
    <div class="top-bar-img">
      <img
        src="https://media.umangapp.in/cdn/landing/theme/icons/emblem-mobile.svg"
        alt=""
      />
      <img
        src="https://media.umangapp.in/cdn/landing/theme/icons/akam-logo.svg"
        alt=""
      />
      <img
        class="ba"
        src="https://media.umangapp.in/cdn/landing/theme/icons/di.svg"
        alt=""
      />
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
      <img onclick="reload()"
        src="img/Screenshot_2024-02-15_234915-removebg-preview (1).png"
        alt=""
      />
    </div>
    <div class="r">
      <a  href="home.php">Home</a>
      <a href="aflabout.php">About</a>
      <a  href="com.php">Complain</a>
      <a class="curr"    href="blog.php">Blogs</a>
      <a href="desh.php">Deshboard</a>
      <ion-icon class="search" name="search-outline"></ion-icon>
      <ion-icon class="profile" style="font-size: 2rem;" name="person-circle-outline"></ion-icon>

      <h5 style="font-size: 1rem;text-transform:uppercase"><?php echo $row['name']; ?></h5>

      <!-- <a class="login-btn" href="login.php">Login</a> -->
      <a href="index.html">logout</a>

    </div>
    <div class="mobile-bar">
      <ion-icon class="mobile-btn" name="search-outline"></ion-icon>
      <ion-icon class="mobile-btn" name="menu-outline"></ion-icon>
      <ion-icon class="mobile-btn" name="close-outline"></ion-icon>
    </div>
  </div>



  <nav>

    <div class="nav-links">
        <ul>
            <li class="hover-link nav-item" id="Ipl" onclick="onNavItemClick('aadhar card')">aadhar_card</li>
            <li class="hover-link nav-item" id="Finance" onclick="onNavItemClick('Finance')" >Finance</li>
            <li class="hover-link nav-item" id="POlitics" onclick="onNavItemClick('voter id')" >voter id</li>
            <li class="hover-link nav-item" id="POlitics" onclick="onNavItemClick('road construction')" >road construction</li> 
            <li class="hover-link nav-item" id="POlitics" onclick="onNavItemClick('government schemes')" >government schemes</li>
            <li class="hover-link nav-item" id="POlitics" onclick="onNavItemClick('road construction')" >road construction</li>            <li class="hover-link nav-item" id="POlitics"onclick="onNavItemClick('voter id')" >voter id</li>







        </ul>
    </div>
    
</nav>
<div class="search-bar">
    <input type="text" class="news-input" name="" id="stext" placeholder="Enter Your Topic?">
    <button class="Search-button" id="Search">Search</button>
</div>
<main>
    <div class="card-container" id="card-container">
       
    </div>
</main>

</div>

<template id="Tem">
    <div class="card">
        <div class="card-header">
            <img src="https://via.placeholder.com/400x200" alt="" id="news-img">
        </div>
        <div class="card-content">
            <h3 class="news-title" id="news-title">This is title</h3>
            <h5 class="news-source" id="news-source">26/05/24</h5>
            <p class="news-dis" id="news-dis">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima incidunt animi officiis possimus neque sed in exercitationem culpa distinctio laborum!</p>
            <button id="r"> Read More</button>
        </div>
    </div>
</template>




















    <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>
  <script src="js/app.js"></script>
  <script src="js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
  <!-- <script src="js/com.js"></script>/ -->
  <!--gsap  --> 
  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
  integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
 <!--Scroll tigger  --> 
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
  integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
  <script src="js/blog.js"></script>

</body>
</html>