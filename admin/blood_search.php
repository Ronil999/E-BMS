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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   
<body>

<?php
  require_once('db.php');
  $query = "select * from adata";
  $result = mysqli_query($con,$query);
  // When form submitted, insert values into the database.

  
  
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
          <a href="blood_search.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Search Blood</span>
          </a>
        </li>
        <li>
        <a href="add_data.php">
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
        <span class="dashboard">Search Blood</span>
      </div>
      <div class="search-box">
        <select name="blood-groups" id="bloodg" style="padding: 12px 20px; margin: 2px 0; box-sizing: border-box;">
            <option>--- Select Blood Group ---</option>
            <option>All</option>
            <option>A+</option>
            <option>B+</option>
            <option>AB+</option>
            <option>O+</option>
            <option>A-</option>
            <option>B-</option>
            <option>AB-</option>
            <option>O-</option>
        </select>

        <select name="City name" id="cityn" style="padding: 12px 20px; margin: 4px 0; box-sizing: border-box; margin-left: 30px;">
            <option>--- Select City ---</option>
            <option>All</option>
            <option>Surat</option>
            <option>Anand</option>
            <option>Nadiad</option>
            <option>Ahemdabad</option>
            <option>Rajkot</option>
            <option>Junagadh</option>
            <option>Vadodara</option>
            <option>Kutch</option>
        </select>


        <!-- <input type="text" placeholder="Search by city..." id="mySearch" onkeyup="myFunction()"> -->
        <i class='bx bx-search' onclick="myFunction()"></i>
      </div>
      <div class="profile-details">
        <img src="https://i.ibb.co/QJbfhSv/review-1.png" alt="">
        <span class="admin_name"><?php echo $_SESSION['username']; ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>


    <div class="home-content">
    <div class="sales-boxes">
      <div class="recent-sales box">
        <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Hospital Name</td>
            <td>City</td>
            <td>Blood Group</td>
            <td>Available Blood</td>
            <td>Contact no.</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
              <?php
                while ($row = mysqli_fetch_assoc($result)) 
                {
                  
              ?>

              <td><?php echo $row['hname']; ?> </td>
              <td><?php echo $row['city']; ?> </td>
              <td><?php echo $row['bgroup']; ?> </td>
              <td><?php echo $row['ablood']; ?> </td>
              <td><?php echo $row['cno']; ?> </td>
              <td><a href="update-form.php?edit=<?php echo $row['id'];?>"><button class="btn btn-success">Edit</button></a></td>
              <td><a href="delete.php?delete=<?php echo $row['id'];?>" onclick="return confirm('Are you sure want to delete this record?')"><button class="btn btn-danger" >Delete</button></a></td>
          </tr>

              <?php 
                }    
              ?>

        </table>
      </div>
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

<!-- <script>
  function myFunction() {
    var input, input1, filter, ul, li, a, i;
    input = document.getElementById("bloodg").value.toUpperCase();
    input1 = document.getElementById("cityn").value.toUpperCase();
    console.log(input);
    console.log(input1);
    // filter = input.value.;
    // ip1 = input.getElementsByTagName("bloodg");  
    // ip2 = input1.getElementsByTagName("cityn");

    ul = document.getElementById("myMenu");  
    li = ul.getElementsByTagName("li");

    ul1 = document.getElementById("myMenu2");  
    li1 = ul1.getElementsByTagName("li");
    ul2 = document.getElementById("myMenu3");  
    li2 = ul2.getElementsByTagName("li");
    ul3 = document.getElementById("myMenu4");  
    li3 = ul3.getElementsByTagName("li");
    ul4 = document.getElementById("myMenu5");  
    li4 = ul4.getElementsByTagName("li");
    
    for (i = 1; i <= li.length ; i++) {
      a = li[i].getElementsByTagName("a")[0].innerHTML;
      b = li2[i].getElementsByTagName("a")[0].innerHTML;
      // console.log(a);
      // console.log(b);

      if (input == "ALL" && input1 == "ALL") { 
        li[i].style.display = "";
        li1[i].style.display = "";
        li2[i].style.display = "";
        li3[i].style.display = "";
        li4[i].style.display = "";
        console.log(i);
      }

      else if(input == "ALL"){
        if (a.toUpperCase().indexOf(input1) > -1) {
        li[i].style.display = "";
        li1[i].style.display = "";
        li2[i].style.display = "";
        li3[i].style.display = "";
        li4[i].style.display = "";
        // console.log(i);
      } else {
        li[i].style.display = "none";
        li1[i].style.display = "none";
        li2[i].style.display = "none";
        li3[i].style.display = "none";
        li4[i].style.display = "none";
      }
      }

      else if (input1 == "ALL") {
        if (b.toUpperCase().indexOf(input) > -1) {
        li[i].style.display = "";
        li1[i].style.display = "";
        li2[i].style.display = "";
        li3[i].style.display = "";
        li4[i].style.display = "";
        // console.log(i);
      } else {
        li[i].style.display = "none";
        li1[i].style.display = "none";
        li2[i].style.display = "none";
        li3[i].style.display = "none";
        li4[i].style.display = "none";
      }
      }

      else{
      if (a.toUpperCase().indexOf(input1) > -1 && b.toUpperCase().indexOf(input) > -1) {
        li[i].style.display = "";
        li1[i].style.display = "";
        li2[i].style.display = "";
        li3[i].style.display = "";
        li4[i].style.display = "";
        // console.log(i);
      } else {
        li[i].style.display = "none";
        li1[i].style.display = "none";
        li2[i].style.display = "none";
        li3[i].style.display = "none";
        li4[i].style.display = "none";
      }
    }
  }
  }
</script> -->




</body>
</html>

