<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php
try {

//	$target_dir = "uploads/"; // permissions need to be set on this folder
	$target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);

// Check if file already exists
	if (file_exists($target_file)) {
		throw new Exception("File already exists");		
	}

// Check file size
	if ($_FILES["fileToUpload"]["size"] > 100000) {
		throw new Exception("File is too large");				
	}

// try to upload file
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded."."\r\n";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}

} catch(Throwable $e) {
    echo $e->getMessage();
}

$image = basename($_FILES["fileToUpload"]['name']);

$check1 = $_FILES['fileToUpload']['size'];

$sizeKB = $check1 / 1000 . "KB";

$imagedata = getimagesize("uploads/".$image);

$width = $imagedata[0];
$height = $imagedata[1];


?>
<?php include 'uploaded.php'; //main html for page to shorten file length?>