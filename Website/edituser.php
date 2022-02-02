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
<?php
  $rowID = $_POST['contactid'];
  //echo $rowID; //use for debug
  $conn = getDBConnection();        // get connection to database
  $row = getContactData($conn, $rowID);    // get contact detail for specified row


//
// This function reads contact data from the database and calls buildTableEntry
//
function getContactData($conn, $rowID) {
  $sql = "SELECT id, email, fname, lname, accType FROM k1j_logins";
  $sql = $sql . " where ID = " . $rowID . ";";
  $result = mysqli_query($conn, $sql);      // access database
  $row = array();                           // empty array
 
  if (mysqli_num_rows($result) == 1) {       // if 1 row returned, get info
    $row = mysqli_fetch_assoc($result);   // build table row for each returned row
  } else {
    echo "0 results";
  }
   return $row;
}

//
// Get database connection
//
function getDBConnection() {
  // get connection to MySQL database
  include 'dbDetails.php';

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  return $conn;
}

?>
<body>
  <div class="container px-4 px-lg-5 mt-5">

        <div id="formContent" style="background-color: rgb(36, 45, 74);">
          <form name='form1' id='form1' method="post" action='UpdateUser.php'>
            <div class="form-row">
              <form>
              <div class="form-group col-md-6">
                <label for="inputfname4">First Name</label>
                <input type="fname" class="form-control" id="inputfname4" value="<?php echo $row["fname"];?>" name="fname">
              </div>
              <div class="form-group col-md-6">
                <label for="inputlname4">Last Name</label>
                <input type="lname" class="form-control" id="inputlname4" value="<?php echo $row["lname"];?>" name="lname">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" value="<?php echo $row["email"];?>" name="email">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4" style="margin: auto; ">
                <label for="inputState">Account Type</label>
                <select id="inputState" class="form-control" name="accType">
                  <option selected><?php echo $row["accType"];?></option>
                  <option>Normal</option>
                  <option>Admin</option>
                  <?php if ($_SESSION['accountType'] == "Head") {
                    echo "<option class='options'>Head</option>";
                  } else {
                    echo "<option class='options' disabled>Head</option>";
                  }
                  ?>
                </select>
                <input type="hidden" id="custId" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" class="btn btn-primary" style="margin: 7px; transform: translate(70%, 20%);" value="Confirm Edit"></input>
              </div>
            </form>
            </div>
            <div class="form-group">
            </div>
          </form>
          </div>
        </div>
      </div>
<?php include 'footer.php';?>
</body>
</html>