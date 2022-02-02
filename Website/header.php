<?php  //checking if session is set from login page
session_start();
if (isset($_SESSION['status'])) {
    if ($_SESSION['status']=="loggedIn"){
    }
    else{
      header("Location: index.php");// sends you back to login page 
    }
}
else{
  header("Location: index.php");// sends you back to login page 
}
?>
<head>
  <title>K1j LTD</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<body class="dark-edition" onload="navEdit()">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          K1J LTD <br>V1.4
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li id="1" class="nav-item inactive  ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- your sidebar here -->
          <li id="2" class="nav-item inactive">
            <a class="nav-link" href="Analytics.php">
              <i class="bi bi-pie-chart-fill"></i>
              <p>Analytics</p>
            </a>
          </li>
          <li id="3" class="nav-item inactive">
            <a class="nav-link" href="email.php">
              <i class="bi bi-envelope-fill"></i>
              <p>Email Tracking</p>
            </a>
          </li>
          <li id="4" class="nav-item inactive">
            <a class="nav-link" href="message.php">
              <i class="bi bi-chat-text-fill"></i>
              <p>Instant Messaging</p>
            </a>
          </li>
          <li id="5" class="nav-item inactive">
            <a class="nav-link" href="files.php">
              <i class="bi bi-file-earmark-fill"></i>
              <p>File Sharing</p>
            </a>
          </li>
          <li id="6" class="nav-item inactive">
            <a class="nav-link" href="Users.php">
              <i class="bi bi-people-fill"></i>
              <p>User List</p>
            </a>
          </li>
          <li class="nav-item inactive">
            <a class="nav-link" href="logout.php">
              <i class="bi bi-box-arrow-left"></i>
              <p>Logout</p>
            </a>
          </li>
          <script type="text/javascript">
            function navEdit() {
              if (page == "Analytics") {
                document.getElementById("2").className = "nav-item active";
              } else if (page == "message") {
                document.getElementById("4").className="nav-item active";
              } else if (page == "dashboard") {
                document.getElementById("1").className ="nav-item active";
              } else if (page == "email") {
                document.getElementById("3").className = "nav-item active";
              } else if (page == "files") {
                document.getElementById("5").className = "nav-item active"
              }else if (page == "users"){
                document.getElementById("6").className = "nav-item active";
              } else {
                document.getElementById("1").className = "nav-item inactive";
                document.getElementById("2").className = "nav-item inactive";
                document.getElementById("3").className = "nav-item inactive";
                document.getElementById("4").className = "nav-item inactive";
                document.getElementById("5").className = "nav-item inactive";
                document.getElementById("6").className = "nav-item inactive";
              }
            }
          </script>
        </ul>
      </div>
    </div>
    <div class="main-panel">
        <?php include 'Settings.php'?>