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
      margin: 0;
      background: linear-gradient(45deg, #49a09d, #5f2c82);
      background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 34%, rgba(0, 212, 255, 1) 100%);
      background: linear-gradient(109.6deg, rgb(0, 37, 84) 11.2%, rgba(0, 37, 84, 0.32) 100.2%);
      background: linear-gradient(109.6deg, rgb(245, 239, 249) 30.1%, rgb(207, 211, 236) 100.2%);
      font-family: sans-serif;
      font-weight: 100;
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    table {
      width: 800px;
      border-collapse: collapse;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 15px;
      background-color: rgba(255, 255, 255, 0.2);
      color: black;
    }

    th {
      text-align: left;
    }

    thead {
      th {
        background-color: #55608f;
      }
    }

    tbody {
      tr {
        &:hover {
          background-color: rgba(255, 255, 255, 0.3);
        }
      }

      td {
        position: relative;

        &:hover {
          &:before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -9999px;
            bottom: -9999px;
            background-color: rgba(255, 255, 255, 0.2);
            z-index: -1;
          }
        }
      }
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

    h2 {
      background-color: white;
      background: linear-gradient(45deg, #49a09d, #5f2c82);
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      background: radial-gradient(590px at 8.2% 13.8%, rgb(18, 35, 60) 0%, rgb(187, 187, 187) 90%);

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

    .reject {
      background-color: red;
      border: none;
      border-radius: 10px;
      color: white;
      padding: 10px 15px;
      cursor: pointer;
      margin-top: 10px;
    }

    .delete {
      background-color: orange;
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
      <a href="user.php">USER</a>
      <a class="curr" href="post.php">Complain</a>



      <!-- <h5 style="font-size: 1rem;text-transform:uppercase"><?php echo $row['name'] ?></h5> -->

      <!-- <a href="index.html">logout</a> -->

    </div>
    <div class="mobile-bar">
      <ion-icon class="mobile-btn" name="search-outline"></ion-icon>
      <ion-icon class="mobile-btn" name="menu-outline"></ion-icon>
      <ion-icon class="mobile-btn" name="close-outline"></ion-icon>
    </div>
  </div>
</body>

</html>




<?php
include('co.php');
error_reporting(0);
$q = "select * from a";
$data = mysqli_query($conn, $q);
$roq = mysqli_num_rows($data);
if ($roq != 0) {
  // echo "recoards have";
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
        <th width="7%">STATUS</th>
        <th width="8%">OPERATION</th>




      </tr>

    <?php

    // <a t href=""></a>
    while ($result = mysqli_fetch_assoc($data)) {
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
        <td><a href='admitview.php?id=$result[id]&&n=$result[name]&&e=$result[email]&&p=$result[phone]&&a=$result[adrees]&&c=$result[city]&&s=$result[state]&&pin=$result[pincode]&&ph=$result[attach]'> <input type='submit' value='View' class='view''>     </a></td>
        <td>" . $result['Status'] . "</td>

<td><a href='accept.php?id=$result[id]'> <input type='submit' value='approve'  name='approve' class='update' onclick=' a()'  >    </a>
<a href='reject.php?id=$result[id]'> <input type='submit' value='reject'  name='reject' class='reject' onclick=' a()'  >    </a>

<a href='delete.php?id=$result[id]&&n=$result[name]&&e=$result[email]&&p=$result[phone]&&a=$result[adrees]&&c=$result[city]&&s=$result[state]&&pin=$result[pincode]'> <input type='submit' value='Delete' class='delete' onclick='return recdelete()'>     </a>


</td>
        </tr>";
    }
  } else {
    echo "recoards not have";
  }



    ?>
    </table>
  </center>


  <!-- echo $result[name']." ".$result['email']." ".$result['phone']." ".$result['adress']." ".$result['city']." ".$result['state']." ".$result['pincode']." ".$result['Municipal']." ".$result['complaint']." ".$result['attachment']."<br>"; -->

  <script>
    function recdelete() {
      return confirm('Are you sure you want to delete this record?');
    }




    let b = document.querySelector(".update");
    b.addEventListener("click", () => {
      b.value = "ok";

    });
  </script>