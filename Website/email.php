<!doctype html>
<html lang="en">
<script type="text/javascript">
  var page = "email";
</script>
<?php include 'Header.php' //call file that contains header tag?>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="container px-4 px-lg-5 mt-5">
              <div class="wrapper fadeInDown">
                <div id="formContent" style="background-color: rgb(36, 45, 74);">
                  <h2 style="color: #fff;">Email</h2><br>
                  <form name="sendEmail" action="EmailSend.php" method="POST">
                    <input type="text" id="Recipient" class="fadeIn second" name="Recipient" placeholder="Recipient Email Address" style="background-color: rgb(49, 61, 105); border-color: rgb(49, 61, 105);"><br>
                    <input type="text" id="Subject" class="fadeIn second" name="Subject" placeholder="Email Subject" style="background-color: rgb(49, 61, 105); border-color: rgb(49, 61, 105);"><br>
                    <!--<input type="text" id="Email-Body" class="fadeIn second" name="email" placeholder="" style="background-color: rgb(49, 61, 105); border-color: rgb(49, 61, 105); width: 100%; height: 400px;">!-->
                    <textarea rows="40" cols="100" id="Email-Body" class="fadeIn second" name="Email" placeholder="Email Text" style="background-color: rgb(49, 61, 105); border-color: rgb(49, 61, 105);"></textarea>
                    <input type="submit" class="fadeIn fourth" value="Send Email" style="background-color: rgb(48, 60, 102);">
                  </form>
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