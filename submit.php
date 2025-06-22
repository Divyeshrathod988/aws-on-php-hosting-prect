<?php

$name=$_POST["name"];
$email=$_POST["email"];
$website=$_POST["website"];
$comment=$_POST["comment"];
$gender=$_POST["gender"];
echo $name;
echo $email;
echo $gender;
echo $comment;
echo $website;

$servername = "localhost";
$username = "root";
$password = "Pass@123";
$dbname = "facebook";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO users (name,email,website,comment,gender)VALUES('$name','$email','$website','$comment','$gender')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<style>
/* General Page Styling */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f4f4f4;
  padding: 20px;
}

/* Form Container */
form {
  background-color: #ffffff;
  padding: 25px 30px;
  max-width: 500px;
  margin: 30px auto;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Form Title */
h2 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}

/* Labels */
label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

/* Inputs and Textarea */
input[type="text"],
input[type="email"],
input[type="url"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 6px;
  box-sizing: border-box;
  font-size: 14px;
}

/* Radio Buttons */
input[type="radio"] {
  margin-right: 5px;
}

.gender-group {
  margin-bottom: 20px;
}

/* Submit Button */
input[type="submit"] {
  background-color: #28a745;
  color: white;
  border: none;
  padding: 12px 25px;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #218838;
}

/* Error Message */
.error {
  color: #e74c3c;
  font-size: 14px;
}

/* Responsive */
@media (max-width: 600px) {
  form {
    padding: 20px;
  }
}
</style>