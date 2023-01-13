<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/admin.style.css">
   <link rel="stylesheet" href="admin.script.js">
   <link rel="stylesheet" href="js/fishlist.js">
   <link rel="stylesheet" href="css/fishlist.css">
   <link rel="stylesheet" href="quantity.js">


</head>
<body>
   
<div class="sidebar">
    <div class="logo-details">
    <!-- <i class='bx bxs-basket'></i>-->
    <img src="images/Oceanus logo pxp.png" class="oceanus"></i>
      <span class="logo_name">Oceanus</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_page.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Customers</span>
          </a>
        </li> -->
        <li>
          <a href="fishlist.html">
            <i class='bx bx-folder'></i>
            <span class="links_name">Fish List</span>
          </a>
        </li>
        <li>
          <a href="orders.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="accounts.php">
            <i class='bx bx-user-pin'></i>
            <span class="links_name">Accounts</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="logout.php">
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
        <img src="images/Oceanus logo pxp.png" alt="">
        <span class="admin_name">Debby Mong</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number" id="quant">
            <?php
                $dash_category_query = "SELECT quantity FROM order_db";
                $dash_category_query_run = mysqli_query($conn, $dash_category_query);

                if($category_total = mysqli_num_rows($dash_category_query_run)){
                  echo '<h4 class="number"> '.$category_total.'</h4>';
                }
                else
                {
                  echo '<h4 class="number"> NO DATA</h4>';
                }


              ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Starting</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Accounts</div>
            <div class="number">
              <?php

              $dash_category_query = "SELECT * FROM user WHERE user_type='user'";
              $dash_category_query_user = mysqli_query($conn, $dash_category_query);

              if($category_total = mysqli_num_rows($dash_category_query_user)){
                echo '<h4 class="number"> '.$category_total.'</h4>';
              }
              else
              {
                echo '<h4 class="number"> NO DATA</h4>';
              }

              ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Starting</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">0</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Starting</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">0</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Not Yet</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <!-- <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul> -->
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Alex Doe</a></li>
            <li><a href="#">David Mart</a></li>
            <li><a href="#">Roe Parter</a></li>
            <li><a href="#">Diana Penty</a></li>
           
          </ul>
          <ul class="details">
            <li class="topic">Date</li>
            <li><a href="#">Date</a></li>
            <li><a href="#">Date</a></li>
            <li><a href="#">Date</a></li>
            <li><a href="#">Date</a></li>
          
          </ul>
          <ul class="details">
            <li class="topic">Status</li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
        
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">Php 204</a></li>
            <li><a href="#">Php 24</a></li>
            <li><a href="#">Php 25</a></li>
            <li><a href="#">Php 170</a></li>
        
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Seling Product</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <img src="images/Fancy Guppy.png" alt="">
              <span class="product">Fish</span>
            </a>
            <span class="price">Php100</span>
          </li>
          <li>
            <a href="#"> <img src="images/Beta Fish.png" alt="">
              
              <span class="product">Nemo </span>
            </a>
            <span class="price">Php300</span>
          </li>
          <li>
            <a href="#">
             <img src="images/Harlequin Fish.png" alt="">
              <span class="product">Silver</span>
            </a>
            <span class="price">Php100</span>
          </li>
          <li>
            <a href="#">
              <img src="images/Puntius Barbs.png" alt=""> 
              <span class="product">Silk</span>
            </a>
            <span class="price">Php150</span>
          </li>
          <!-- Pwede dugang start dri ug top selling -->
          </ul>
        </div>
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


</body>
</html>