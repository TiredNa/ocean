<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/fishlist.css">
   <link rel="stylesheet" href="css/admin.style.css">

   <!-- custom js file link  -->
   <script src="script.js" defer></script>
  
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Panel</title>
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
          <a href="admin_page.php">
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
          <a href="fishlist.html" >
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
          <a href="accounts.php" class="active">
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

      
      <!-- Fish COntent -->
      <center>
      <div class="container">
      <table class="table" style="border-spacing: 20px;" >
      <style>
        table, th, td{
          border-spacing: 20px;
          border: 1px solid black;
          border-collapse: collapse;
          text-align: center;
        } table{
            width: 100%;
        }
      </style>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername ="localhost";
            $username = "root";
            $password = "";
            $database = "admins";

            //create connection
            $connection = new mysqli( $servername,  $username, $password,  $database);

            //check connection
            if ($connection->connect_error){
                die("Connection failed" . $connection->connect_error);
            }

            //read the database from myphp
            $sql = "SELECT * FROM user WHERE user_type ='user' ";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query:" . $connection->error);
            }
            //read data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row['id'] ."</td>
                <td>" . $row['name'] ."</td>
                <td>" . $row['email'] ."</td>
                <td>" . $row['password'] ."</td>
                <td>" . $row['contact'] ."</td>
             </tr>";
            }

             ?>
        </tbody>
    </table>
      </div>
      <!-- Fish COntent -->


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