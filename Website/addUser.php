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
<?php include 'Header.php'?>
<body>
  <style type="text/css">
    .form-control, .options {
      background-color: rgb(48, 60, 102);
    }
  </style>
  <div class="container px-4 px-lg-5 mt-5">

        <div id="formContent" style="background-color: rgb(36, 45, 74);">
          <!-- Login Form -->
          <div class="row">
            <div class="col-sm-4">
              <form name='form1' id='form1' method="post" action="addingUser.php">
                <div class="form-row">
                  <form>
                  <div class="form-group col-md-6">
                    <label for="inputfname4">First Name</label>
                    <input type="fname" class="form-control" id="inputfname4" placeholder="First Name" name="firstname">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputlname4">Last Name</label>
                    <input type="lname" class="form-control" id="inputlname4" placeholder="Last Name" name="lastname">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4" style="margin: auto; ">
                    <label for="inputState">Account Type</label>
                    <select id="inputState" class="form-control" name="accType">
                      <option  style="color: rgb(48, 60, 102);" selected>Choose...</option>
                      <option class="options">Normal</option>
                      <option class="options">Admin</option>
                      <?php if ($_SESSION['accountType'] == "Head") {
                        echo "<option class='options'>Head</option>";
                      } else {
                        echo "<option class='options' disabled>Head</option>";
                      }
                      ?>
                    </select>
                    <input type="submit" class="btn btn-primary" style="margin: 7px; transform: translate(70%, 20%);" value="Add User">
                  </div>
                </form>
                </div>
                <div class="form-group">
                </div>
              </form>
             <p></p>
            </div>
          </div>
        </div>
      </div>

<?php include 'footer.php'?>

</body>
</html>
