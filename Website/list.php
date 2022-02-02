<?php
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pw = $_POST['password'];

$email = htmlspecialchars($email);
$fname = htmlspecialchars($fname);
$lname = htmlspecialchars($lname);
$pw = htmlspecialchars($pw);



$servername = "localhost";
$username = "111117";
$password = "saltaire";

try {
  $conn = new PDO("mysql:host=$servername;dbname=111117", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO k1j_logins (Email, Fname, Lname, Password, AccType)
VALUES ('$email', '$fname', '$lname', '$pw', 'Normal')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn = null;

header('Location: index.php');
?>