<?php
session_start()
?>
<!doctype html>
<html lang="en">

<?php include 'Header_no_nav.php' //call file that contains header tag?>
<head>
  <link rel="stylesheet" href="./assets/css/login.css"/>
</head>
<body class="dark-edition" style="width: 100%; height: 100%;">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          K1J LTD
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal" style="font-size: 10px;">
          V1.2-RT
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item inactive  ">
            <a class="nav-link" href="index.php">
              <i class="bi bi-box-arrow-in-right"></i>
              <p>Login</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="register.php">
              <i class="bi bi-pencil-square"></i>
              <p>Register</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <div class="content">
          <!-- your content here -->
          <div class="container px-4 px-lg-5 mt-5">
              <div class="wrapper fadeInDown">
                <div id="formContent" style="background-color: rgb(36, 45, 74);">
                  <!-- Login Form -->
                  <form action="list.php" method="POST">
                      <h2 style="color: #fff;">Register (W.I.P)</h2><br>
                    <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email" style="background-color: rgb(49, 61, 105); border-color: rgb(49, 61, 105);">
                    <input type="text" id="fname" class="fadeIn second" name="fname" placeholder="First Name" style="background-color: rgb(49, 61, 105); border-color: rgb(49, 61, 105);">
                    <input type="text" id="lname" class="fadeIn second" name="lname" placeholder="Last Name" style="background-color: rgb(49, 61, 105); border-color: rgb(49, 61, 105);">
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" style="background-color: rgb(49, 61, 105); border-color: rgb(49, 61, 105);">
                    <i class="bi bi-eye-slash fadeIn third" id="togglePassword" style="color: rgb(89, 77, 219);"></i>
                    <input type="submit" class="fadeIn fourth" value="Register" style="background-color: rgb(118, 58, 138);">
                    <span class="text-danger align-middle">
                    </span>
                  </form>
                </div>
              </div>
          </div>
          <?php include 'footer.php'; ?>
    </div>
  </div>
<script>
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    
    // toggle the icon
    this.classList.toggle("bi-eye");
});
    </script>
  
</body>

</html>