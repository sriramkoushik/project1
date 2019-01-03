<?php
$servername = "localhost";
$firstname="firstname";
$lastname="lastname";
$gender="gender";
$dob="dob";
$uname = "uname";
$password = "password";
$address="address";
$pincode="pincode";
$ph_no="ph_no";
$email="email";
$dbname = "myDB";

// Create connection
$conn = new mysqli("localhost","root","","fund");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<html><body><table border=1 align=center>";
		echo "<tr><th>firstname</th><th>lastname</th><th>gender</th><th>dob</th><th>uname</th><th>password</th><th>address</th><th>pincode</th><th>email</th></tr>";
        
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>". $row["firstname"]."</td><td>" . $row["lastname"]."</td><td>" . $row["gender"]. "</td><td>" . $row["dob"]."</td><td>" . $row["uname"]."</td><td>" . $row["password"]."</td><td>". $row["address"]."</td><td>" . $row["pincode"]."</td><td>" . $row["email"]."</td></tr>";
    }
     echo "</table></body></html>";
} else {
    echo "0 results";
}
$conn->close();
?>