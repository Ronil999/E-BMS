<?php
//include auth_session.php file on all user panel pages
  include("auth_session.php");
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head> 
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard</title>-->
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <style>
      .button {
        /* margin-left: 10%; */
        display: inline-block;
        padding: 15px 25px;
        font-size: 15px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
      }

      .button:hover {background-color: #3e8e41}

      .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
      }

   </style>
<body>


  <?php
      require_once('db.php');
  
  ?>



  <div class="sidebar">
    <div class="logo-details">
      <img id="blood" src="https://i.ibb.co/V9ZYfFg/logo-final.jpg" alt="This is image" width="50px"
                style="border-radius: 50%; margin-right: 10%;">
      <span class="logo_name">BMS Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="blood_search.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Search Blood</span>
          </a>
        </li>
        <li>
          <a href="add_data.php" class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add Blood</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Available Blood</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li> -->
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li> -->
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="/BMS/index.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>



  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div> -->
      <div class="profile-details">
        <img src="https://i.ibb.co/QJbfhSv/review-1.png" alt="">
        <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content" >
      <form action="" method="post">
        Hospital Name   : <input name="hname" style="padding: 12px 20px;  box-sizing: border-box; margin-left:1.4%"> <br> <br>
        City            : <input name="city" style="padding: 12px 20px; box-sizing: border-box; margin-left:8%" > <br> <br>
        Blood Group     : <input name="bgroup" style="padding: 12px 20px; box-sizing: border-box; margin-left:2.6%"> <br> <br>
        Available Blood : <input name="ablood" style="padding: 12px 20px; box-sizing: border-box; margin-left:0.8%"> <br> <br>
        Contact no      : <input name="cno" style="padding: 12px 20px; box-sizing: border-box; margin-left:3.4%"> <br> <br>
        <button name="submit" class="button">Add data</button> <br> <br>

        <?php
        // When form submitted, insert values into the database.
  $insert=false;
  if(isset($_REQUEST['hname'])){
      // removes backslashes
      $hname = $_POST['hname'];
      $city    = $_POST['city'];
      $bgroup = $_POST['bgroup'];
      $ablood = $_POST['ablood'];
      $cno = $_POST['cno'];

      if($hname!="" && $city!="" && $bgroup!="" && $ablood!="" && $cno!=""){
          $sql    = "INSERT into `adata` (hname, city, bgroup, ablood, cno)
          VALUES ('$hname', '$city', '$bgroup', '$ablood', '$cno');";
          $result   = mysqli_query($con, $sql);
          if ($result == true) {
                      $insert = true;
          } 
      }
      else {
          echo "<p style='color:red'>Enter Valid input</p>";
      }
      
      
      // else {
      //         echo "ERROR: $sql <br> $con->error";
      //  }
      } 
            if($insert == true)
                echo "<p style='color:green'>Succesfully data inserted</p>"; 
        ?>
    </form>

    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

