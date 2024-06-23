<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conne, "SELECT * from userdata where id = '$id'");
  $row = mysqli_fetch_assoc($result);
} else {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="a/index.css">
  <link rel="stylesheet" href="a/phone.css">
  <link rel="stylesheet" href="a/about.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <style>
    .profile {
      width: 2rem;
      height: 2rem;
      color: rgb(36, 20, 74);
    }
  </style>
  <!-- title -->
  <title>Gov. Help and Service</title>
  <link rel="icon" href="img/l.png" />
</head>

<body>
  <div class="main2">

    <div class="top-bar">
      <div class="top-bar-img">

        <img src="https://media.umangapp.in/cdn/landing/theme/icons/emblem-mobile.svg" alt="">
        <img src="https://media.umangapp.in/cdn/landing/theme/icons/akam-logo.svg" alt="">
        <img class="ba" src="https://media.umangapp.in/cdn/landing/theme/icons/di.svg" alt="">
      </div>
      <select class="l-btn " name="lan" id="">

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
    <div class="nav ">
      <div class="l">
        <img src="img/Screenshot_2024-02-15_234915-removebg-preview (1).png" alt="">
      </div>
      <div class="r">
        <a href="home.php">Home</a>
        <a class="curr" href="aflabout.php">About</a>
        <a href="com.php">Complain</a>
        <a href="aflblog.php">Blogs</a>
        <a href="desh.php">Deshboard</a>
        <ion-icon class="search" name="search-outline"></ion-icon>
        <!-- <a class="login-btn" href="login.html">Login</a> -->
        <ion-icon class="profile" name="person-circle-outline"></ion-icon>
        <h5 style="font-size: 1rem;text-transform:uppercase"><?php echo $row['name'] ?></h5>

        <a href="index.html">logout</a>



      </div>
      <div class="mobile-bar">
        <ion-icon class="mobile-btn" name="search-outline"></ion-icon>
        <ion-icon class="mobile-btn" name="menu-outline"></ion-icon>
        <ion-icon class="mobile-btn" name="close-outline"></ion-icon>
      </div>
    </div>
    <!-- <svg class="sharp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f094a6" fill-opacity="1" d="M0,160L48,154.7C96,149,192,139,288,122.7C384,107,480,85,576,112C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> -->
    <div class="page">
      <!-- <div class="p4"> -->
      <!-- <div class="r1">
                  <h3>Taral naval</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, nulla! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus ut placeat cum eligendi at? Ducimus magni neque tempora corporis natus!</p>
                  <div class="social">
                      <ion-icon class="ic " name="logo-instagram"></ion-icon>
                      <ion-icon class="ic " name="logo-facebook"></ion-icon>
                      <ion-icon class="ic " name="logo-twitter"></ion-icon>
                  </div>
              </div>
              <div class="l1">
                  <img src="img/1708582176114.jpg" alt="">
              </div>
          </div> -->
      <!-- <div class="top">
          <h1>About us</h1>
        </div> -->
      <div class="main">
        <div class="l">
          <!-- <img
              src="https://images.unsplash.com/photo-1600280912394-17f3c3ea5fef?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt=""
            /> -->
          <img src="https://images.unsplash.com/photo-1622445758194-45abe945ee7d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
        <div class="r">
          <h2>We're building a better future for everyone</h2>
          <p>
            We're a small team with a big mission: to transform government
            services and make them accessible, simple, and reliable. We belleve
            that technology can help us create a moce equitable and inclusive
            society. And we're committed to buliding our products in an open,
            transparent, and user-centered way. We're excited 1o share more
            about our work with you.
          </p>
          <button class="rrr">Read Our Principal</button>
        </div>
      </div>

    </div>
    <div class="page2">
      <h1>Founder Detail</h1>
      <div class="card-con">
        <div class="card">
          <div class="img">
            <img src="img/1708582176114.jpg" alt="" />
          </div>
          <div class="content">
            <h2>Taral naval</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
              aperiam aut explicabo quibusdam, possimus repudiandae!
            </p>
            <a href="#">Connect</a>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <img src="img/1708582176102.jpg" alt="" />
          </div>
          <div class="content">
            <h2>D-King</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
              aperiam aut explicabo quibusdam, possimus repudiandae!
            </p>
            <a href="#">Connect</a>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <img src="img/1709177749674.jpg" alt="" />
          </div>
          <div class="content">
            <h2>Abhi Patel</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
              aperiam aut explicabo quibusdam, possimus repudiandae!
            </p>
            <a href="#">Connect</a>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <img src="img/1708582176122.jpg" alt="" />
          </div>
          <div class="content">
            <h2>Dhruvin chuhan</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti
              aperiam aut explicabo quibusdam, possimus repudiandae!
            </p>
            <a href="#">Connect</a>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="footer-t">
        <div class="footer-logo">
          <img src="img/Screenshot_2024-02-15_234915-removebg-preview (1).png" alt="" />
        </div>
        <div class="footer-links">
          <a href="index.html">Home</a>
          <a href="about.html">About</a>
          <a href="combeforlogin.html">Complain</a>
          <a href="blog.html">Blogs</a>
          <a href="desh.html">Deshboard</a>
          <a href="login.php">Login</a>
        </div>
      </div>
      <hr>
      <div class="footer-b">
        <div class="social">

          <i class="ri-instagram-fill"></i>
          <i class="ri-youtube-fill"></i>
          <i class="ri-twitter-fill"></i>
          <i class="ri-facebook-circle-fill"></i>
        </div>
        <div class="copy">
          <h5>&copy Goverment help & service</h5>
        </div>
      </div>
    </footer>

  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="js/aboutanimation.js"></script>

  <script src="/js/index.js"></script>
</body>

</html>