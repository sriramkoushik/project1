<?php
$servername = "localhost";
$fundtype="fundtype";
$fundname="fundname";
$acno="acno";
$proof="proof";
$date="date";
$pan="pan";
$add1="add1";
$add2="add2";
$city="city";
$pincode="pincode";
$phno="phno";

$fname="fname";
$lname="lname";
$gender="gender";
$uname = "uname";
$password = "password";

// Create connection
$conn = new mysqli("localhost","root","","fund");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT lastname FROM register";
$result = $conn->query($sql);
echo "welcome";
echo $result;
$conn->close();
?>