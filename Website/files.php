<!doctype html>
<html lang="en">
<script type="text/javascript">
  var page = "files";
</script>
<?php include 'Header.php'; //call file that contains header tag ?>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <link rel="stylesheet" type="text/css" href="assets/css/hidescroll.css">
</head>
      <div class="content col-25" style="overflow-y: hidden; overflow-x: hidden;">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="container px-4 px-lg-5 mt-5">

                <div id="formContent" style="background-color: rgb(36, 45, 74);">
                  <!-- Login Form -->
                  <form action="upload.php" method="POST" enctype="multipart/form-data">
                      <h2 style="color: #fff;">Upload a File for share link</h2><br><p style="font-size: 15px;"> (Files are Stored for 30 days, For permanent upload please consult your manager)</p>
                      <input type="file" name="fileToUpload" class="uploader fadeIn first" id="fileToUpload" style="background-color: rgb(48, 60, 102);"><br>
                      <input type="submit" class="fadeIn second" value="Upload" style="background-color: rgb(48, 60, 102);">
                      <span class="text-danger align-middle">
                      </span>
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