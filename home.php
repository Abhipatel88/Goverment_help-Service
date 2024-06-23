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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="a/style.css" />
    <link rel="stylesheet" href="a/phone.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css"
    />
 <!-- cdn for swiper -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- title -->
    <title>Gov. Help and Service</title>
    <link rel="icon" href="img/l.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
      .profile {
        width: 2rem;
        height: 2rem;
        color: rgb(36, 20, 74);
      }
      .swiper {
        width: 100%;
        /* background-color: #007aff; */
        height: 100%;
      }
      
      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: column;
        color: black;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 30px;
      }
      .img-swi{
        width: 100%;
        height: 70%;
      }
      .img-swi img{
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 30px;

      }
      .img-tex{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 30%;

      }
      .img-tex h3{
        font-size: 1.6rem;
      }
      
      .swiper {
        width: 100%;
        height: 300px;
        margin: 20px auto;
      }
  
      .append-buttons {
        text-align: center;
        margin-top: 20px;
      }
  
      .append-buttons button {
        display: inline-block;
        cursor: pointer;
        border: 1px solid #007aff;
        color: #007aff;
        text-decoration: none;
        padding: 4px 10px;
        border-radius: 4px;
        margin: 0 10px;
        font-size: 13px;
      }
    </style>
  </head>
  <body>
    <div id="main">
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
        <select class="l-btn" name="lan" id="">
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
      <div class="nav">
        <div class="l">
          <img
            src="img/Screenshot_2024-02-15_234915-removebg-preview (1).png"
            alt=""
          />
        </div>
        <div class="r">
          <a class="curr" href="index.php">Home</a>
          <a href="aflabout.php">About</a>
          <a href="com.php">Complain</a>
          <a href="aflblog.php">Blogs</a>
          <a href="desh.php">Deshboard</a>
          <ion-icon class="search" name="search-outline"></ion-icon>
          <!-- <a class="login-btn" href="login.php">Login</a> -->
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
      <div class="page1">
        <div class="page1-l">
          <!-- <img class="img-slides" src="Register Your Complains HERE_page-0003.jpg" alt="">
            <img class="img-slides" src="Register Your Complains HERE_page-0001.jpg" alt="">
            <img class="img-slides" src="Register Your Complains HERE_page-0004.jpg" alt="">
            <img class="img-slides" src="Register Your Complains HERE_page-0002.jpg" alt=""> -->
          <button class="intro">Hello and Welcome to the</button>
          <h1>
            Goverment Help <br />
            & Service <br />
            Website
          </h1>
          <p>Register your complain to the Goverment & track your service</p>
          <button class="read-btn">Read More</button>
        </div>
        <div class="page1-r">
          <img src="img/1_Coffee-1-transformed.png" alt="" />
        </div>
      </div>
      <div class="page2">
        <div class="page2-h1">
          <h1>How can we help you today?</h1>
        </div>
        <div class="feature">
          <div class="f1">
            <i class="ri-survey-line"></i>
            <h5>Fill The Complain</h5>
            <p>Report an issue,make a request,or ask a question</p>
          </div>
          <div class="f1">
            <i class="ri-check-double-line"></i>
            <h5>Track a Complaint</h5>
            <p>See the status of your
              request and get updates</p>
          </div>
          <div class="f1">
            <i class="ri-menu-2-line"></i>
            <h5>Read our blog</h5>
            <p>Learn about our work,
              services, and events</p>
          </div>
          <div class="f1">
            <i class="ri-group-line"></i>
            <h5>Join our team</h5>
            <p>Find job opportunities and
              internships</p>
          </div>
        </div>
      </div>
      <div class="page3">
        <div class="coming-soon">
          <h1>Cooming soon</h1>
          <div class="cooming-soon-service">
            
            <div #swiperRef="" class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-swi">

                    <img src="img/Aadhaar_Preview.png" alt="">
                  </div>
                  <div class="img-tex">
                    <h3>Addhar Card</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-swi">

                    <img src="img/bis3.png" alt="">
                  </div>
                  <div class="img-tex">
                    <h3>BIS</h3>
                  </div></div>
                <div class="swiper-slide">
                  <div class="img-swi">
                    <img style="width: 150px; height: 150px;" src="img/rail.png" alt="">
                  </div>
                  <div class="img-tex">
                    <h3>Indian Railway</h3>
                  </div></div>
                <div class="swiper-slide"><div class="img-swi">

                    <img style="width: 170px; height: 170px;" src="img/abha.png" alt="">
                  </div>
                  <div class="img-tex">
                    <h3>ABHA</h3>
                  </div></div>
              </div>
              <div class="swiper-button-next">
                <i class="ri-skip-right-fill"></i>
              </div>
              <div class="swiper-button-prev">
                <i class="ri-skip-left-fill"></i>
              </div>
              <!-- <div class="swiper-pagination"></div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="page4">
        <div class="l">
          <div class="box">
            <div class="box-flex-l">

           
            <div class="iner-box">
              <img src="img/a.png" alt="">
            </div>
            <div class="iner-box">
              <img src="img/s.png" alt="">
              
            </div>
          </div>
          <div class="box-flex-r">

         
            <div class="iner-box">
              <img src="img/b.png" alt="">
              
            </div>
            <div class="iner-box">
              <img src="img/r.png " alt="">
              
            </div>
          </div>
          </div>
        </div>
        <div class="r">
          <h1>Service Available Citys</h1>
          <p>Explore services offered by different States and Union Territories of India!</p>
          <button class="citys">Upcoming City</button>
        </div>
      </div>
      <!--footer--> 
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
   

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
      integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
 
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
       <!-- cdn for swiper.js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/amimate.js"></script>
    <script src="js/index.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 50,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


    </script>
  </body>
</html>
