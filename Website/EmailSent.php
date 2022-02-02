<!doctype html>
<html lang="en">
<script type="text/javascript">
  var page = "email";
</script>
<?php include 'Header.php' //call file that contains header tag?>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/login.css"> <!-- Using login assets on other sites, borrowing most css from login.css. Not in header.php due to some compatibility issues !-->
</head>
      <div class="content" style="margin: 0px; padding: 0px;">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="container px-4 px-lg-5 mt-5">
              <div class="wrapper fadeInDown" style="margin: 0px;">
                <div id="formContent" style="background-color: rgb(36, 45, 74);">
                  <h1> Email Sent! </h1><br>
                  <i class="bi bi-check-circle-fill" style="color: rgb(32, 250, 97);"></i>
                </div>
              </div>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <?php include 'mainJS.php';?>
</body>

</html>