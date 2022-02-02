<?php
// Start the session
session_start();
if ($_SESSION["status"] != "loggedIn") {
  $_SESSION['login_error_msg'] = "You must sign on before you can view contacts.";
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
  var page = "users";
</script>
<?php include 'header.php'?>
<body>
  <!-- your content here -->
  <div class="container px-4 px-lg-5 mt-5">

        <div id="formContent" style="background-color: rgb(36, 45, 74);">
          <!-- Login Form -->
            <div class="row">
              <div class="col-sm-4 col-15">
                <form name='form1' id='form1' method="post" formaction='deleteUser.php'>
                  <div class="form-row">
                    <form>
                    <div class="form-group col-md-6">
                      <label for="inputfname4" style="text-align: center;">Enter ID of User to Delete</label>
                      <input type="number" class="form-control" id="inputfname4" placeholder="ID" name="contactid">
                      <input type="submit" class="btn btn-primary" id="DeleteUser" style="margin: 7px; transform: translate(70%, 20%);" formaction="deleteUser.php" value="Delete User!"></input>
                    </div>
                  </form>
                </div>
              </form>
            </div>
          </div>        </div>
      </div>
<?php include 'footer.php'?>
</body>
