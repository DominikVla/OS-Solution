<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php
include 'dbDetails.php';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $accType = $_POST['accType'];

  $firstname = htmlspecialchars($firstname);
  $lastname = htmlspecialchars($lastname);
  $email = htmlspecialchars($email);
  $password = htmlspecialchars($password);
  $accType = htmlspecialchars($accType);

$sql = "INSERT INTO k1j_logins (Email, Fname, Lname, password, AccType)
VALUES ('$email','$firstname','$lastname','$password','$accType')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
header('Location: Users.php');
?>