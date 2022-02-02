<?php
// Start the session
session_start();
if ($_SESSION["status"] != "loggedIn") {
  $_SESSION['login_error_msg'] = "You must sign on before you can view contacts.";
  header("Location: index.php");
}
?>
<script type="text/javascript">
  var page = "users";
</script>
<!DOCTYPE html>
<html lang="en">
<?php include 'Header.php'; ?>
<body>
<style type="text/css">
  .table {
    background-color: rgb(48, 60, 102);
  }
  table {
    width: 800px;
    height: 100%;
    text-align: center;
  }
</style>
<div class="container px-4 px-lg-5 mt-5 col 4">

      <div id="formContent" style="background-color: rgb(36, 45, 74);">
        <div class="row">
          <div class="col-sm-9">
            <form name='formList' id='formList' action="contactEdit.php" method="post">
            <!--<table class="table col-sm-9"> !-->
              <thead class="thead-dark">
              </thead>
              <tbody>
                <?php
                $servername = "localhost";
                $username = "111117";
                $password = "saltaire";
                $dbname = "111117";

                // Create connection
                echo "<thead class='thead-dark'>";
                echo "<table class='table'>";
                 echo "<tr class='top'><th scrope='col' style='color: white;'>Id</th><th scrope='col' style='color: white;'>name</th><th scrope='col' style='color: white;'>L name</th><th scrope='col' style='color: white;'>email</th><th scrope='col' style='color: white;'>Account Type</th></div></tr>"; // the titles
                 echo "</thead>";

                class TableRows extends RecursiveIteratorIterator {
                    function __construct($it) {
                        parent::__construct($it, self::LEAVES_ONLY);
                    }

                    function current() {
                        return "<td style='width: 150px; border: 1px solid black; color: white;''>" . parent::current(). "</td>";
                    }

                    function beginChildren() {
                        echo "<tr>";
                    }

                    function endChildren() {
                        echo "</tr>" . "\n";
                    }
                }

                $servername = "localhost";
                $username = "111117";
                $password = "saltaire";
                $dbname = "111117";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT ID, Fname, Lname, Email, AccType FROM k1j_logins;"); //SQL command 
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                        echo $v;
                    }
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                echo "</table>";
                ?>
              </tbody>
            </table>
            <p></p>
            <div>
            <div class="buttons">
            <a type="nav-link" href="addUser.php" class="btn btn-primary">Add a New User</a>
            <a type="nav-link" href="delReq.php"class="btn btn-primary" id="DeleteUser">Delete User</a>
            <a type="nav-link" href="EditReq.php" class="btn btn-primary" id="edituser">Edit User</a>
          </div>
        </div>
        </form>
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>

</body>
</html>
