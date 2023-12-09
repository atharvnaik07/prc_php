<!DOCTYPE html>
<html>
<head>
 <title>Registration Form Data</title>
</head>
<body>
 <h2>Registration Form Data</h2>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = $_POST["name"];
 $email = $_POST["email"];
 $gender = isset($_POST["gender"]) ? $_POST["gender"] : "Not
specified";
 $country = $_POST["country"];
 $newsletter = isset($_POST["newsletter"]) ? "Yes" : "No";
 echo "<p><strong>Name:</strong> $name</p>";
 echo "<p><strong>Email:</strong> $email</p>";
 echo "<p><strong>Gender:</strong> $gender</p>";
echo "<p><strong>Country:</strong> $country</p>";
 echo "<p><strong>Subscribe to Newsletter:</strong>
$newsletter</p>";
 } else {
 echo "Form submission failed. Please try again.";
 }
 ?>
</body>
</html>
