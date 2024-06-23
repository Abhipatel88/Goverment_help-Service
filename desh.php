<?php
include("co.php");
error_reporting(0);
?>
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
<html>

<head>
  <link rel="stylesheet" href="a/phone.css" />
  <link rel="stylesheet" href="a/index.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="icon" href="img/l.png" />

  <title>Gov. Help and Service</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      /* font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; */
    }

    body {
      background-color: #f094a6;
    }

    table {
      background-color: white;
      border-radius: 10px;
      padding: 10PX;
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }

    th {
      background-color: #24144a;
      color: white;
    }

    h2 {
      background-color: white;
      margin-bottom: 2rem;
      font-size: 2rem;
      color: black;
      padding: 10px;
    }

    .update {
      background-color: green;
      border: none;
      border-radius: 10px;
      color: white;
      padding: 10px 15px;
      cursor: pointer;
    }

    .delete {
      background-color: red;
      margin-top: 10px;
      border: none;
      border-radius: 10px;
      color: white;
      padding: 10px 15px;
      cursor: pointer;
    }

    .view {
      background-color: cadetblue;
      margin-top: 10px;
      border: none;
      border-radius: 10px;
      color: white;
      padding: 10px 15px;
      cursor: pointer;
    }
  </style>
</head>

<body>
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

  <script src="js/index.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>


<?php
$id = $_SESSION["id"];
//  echo $id
$query = mysqli_query($conne, "select * from a where postid= '$id'");
$rowco = mysqli_num_rows($query);
$roq = mysqli_num_rows($query);

if ($roq != 0) {
?>

  <?php


  ?>

  <h2 align="center">Display Recoards</h2>

  <center>
    <table border="2" cellspacing="7" width="98%">
      <tr>
        <th width="1%">ID</th>
        <th width="7%">NAME</th>
        <th width="13%">EMAIL</th>
        <th width="5%">PHONE</th>
        <th width="20%">ADRESSS</th>
        <th width="5%">CITY</th>
        <th width="5%">STATE</th>
        <th width="5%">PINCODE</th>
        <th width="7%">MUNICIPAL</th>
        <th width="20%">COMPLAINT</th>
        <th width="7%">VIEW MORE</th>
        <th width="8%">OPERATION</th>
        <th width="8%">STATUS</th>

      </tr>

    <?php

    // <a t href=""></a>
    while ($result = mysqli_fetch_assoc($query)) {
      echo  "<tr>
        <td>" . $result['id'] . "</td>
        <td>" . $result['name'] . "</td>
        <td>" . $result['email'] . "</td>
        <td>" . $result['phone'] . "</td>
        <td>" . $result['adrees'] . "</td>
        <td>" . $result['city'] . "</td>
        <td>" . $result['state'] . "</td>
        <td>" . $result['pincode'] . "</td>
        <td>" . $result['municipal'] . "</td>
        <td>" . $result['com'] . "</td>
        <td><a href='viewphoto.php?id=$result[id]&&n=$result[name]&&e=$result[email]&&p=$result[phone]&&a=$result[adrees]&&c=$result[city]&&s=$result[state]&&pin=$result[pincode]&&ph=$result[attach]'> <input type='submit' value='View' class='view''>     </a></td>

<td><a href='update.php?id=$result[id]&&n=$result[name]&&e=$result[email]&&p=$result[phone]&&a=$result[adrees]&&c=$result[city]&&s=$result[state]&&pin=$result[pincode]'> <input type='submit' value='Update' class='update'>     </a>

<a href='d.php?id=$result[id]&&n=$result[name]&&e=$result[email]&&p=$result[phone]&&a=$result[adrees]&&c=$result[city]&&s=$result[state]&&pin=$result[pincode]'> <input type='submit' value='Delete' class='delete' onclick='return recdelete()'>     </a>


</td>
<td>" . $result['Status'] . "</td>

        </tr>";
    }
  } else {
    echo "<h1 style='text-align:center;text-transform:uppercase;color:#24144a'>recoards not have</h1>";
  }



    ?>
    </table>
  </center>








  <!--For icon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>