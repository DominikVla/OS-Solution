<!doctype html>
<html lang="en">
<?php include 'Header.php'; //call file that contains header tag ?>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="container px-4 px-lg-5 mt-5">

                <div id="formContent" style="background-color: rgb(36, 45, 74);">
                  <!-- Login Form -->
                  <form method="POST" enctype="multipart/form-data">
                      <h2 style="color: #fff;">Upload a File for share link</h2><br><p style="font-size: 15px;"> (Files are Stored for 30 days, For permanent upload please consult your manager)</p>
                      <img src="uploads/<?php echo $image; ?>" style="max-width: 50%; max-height: 50%;"><br>
                      <input type="submit" class="fadeIn fourth" onclick="myFunction()" value="Click to Copy! (not functioning yet!)" id="download" style="background-color: rgb(118, 58, 138);">
                      <script type="text/javascript">
                        function myFunction() {
                          /* Get the text field */
                          var copyText = document.getElementById("download");

                          /* Select the text field */
                          copyText.select();
                          copyText.setSelectionRange(0, 99999); /* For mobile devices */

                           /* Copy the text inside the text field */
                          navigator.clipboard.writeText(copyText.value);

                          /* Alert the copied text */
                          alert("Copied the text: " + copyText.value);
                        }
                      </script>

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