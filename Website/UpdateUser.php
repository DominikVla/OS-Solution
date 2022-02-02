<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>


<?php
$id = $_POST['id'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$accType = $_POST['accType'];

$id = htmlspecialchars($id);
$firstname = htmlspecialchars($firstname);
$lastname = htmlspecialchars($lastname);
$email = htmlspecialchars($email);
$accType = htmlspecialchars($accType);

include 'dbDetails.php';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE k1j_logins SET fname='$firstname', lname='$lastname', email='$email', accType='$accType' WHERE ID='$id'";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
header("Location: Users.php");
?> 