<?php
if(@!$_POST['question']==""){
//get value from the html
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$question = $_POST['question'];

// Create connection
$conn = mysqli_connect("localhost", "root", "", "jujufood_db");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO visitors_msg (username, email, phone_number, locations, question)
VALUES ('$name', '$email', '$phone', '$location', '$question')";

if (mysqli_query($conn, $sql)) {
  echo "<script> alert('Thank you, We will reply on your email'); window.location='index.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}else{
	echo "<script> alert('Sorry Please Submit your Question first'); window.location='index.html'</script>";
}
?>