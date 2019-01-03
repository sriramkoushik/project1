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

$email="email";
$dbname = "myDB";

// Create connection
$conn = new mysqli("localhost","root","","fund");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM raise";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<html><body><table border=1 align=center>";
	echo "<tr><th>fundtype</th><th>fundname</th><th>acno</th><th>proof</th><br><th>date</th><th>pan</th><th>add1</th><br><th>add2</th><th>city</th><th>pincode</th><th>fname</th><th>lname</th><th>phno</th></tr>";
    while($row = $result->fetch_assoc()) {
		
        echo "<tr><td>".$row["fundtype"]."</td><td>" . $row["fundname"]."</td><td>" .  $row["acno"]."</td><td>" .  $row["proof"]."</td><td>" . $row["date"]."</td><td>"  . $row["pan"]."</td><td>" .$row["add1"]."</td><td>" . $row["add2"]."</td><td>" .$row["city"]."</td><td>"  . $row["pincode"]."</td><td>"  . $row["fname"]."</td><td>"  . $row["lname"]."</td><td>"  . $row["phno"]."</td></tr>"."<br>";
    }
	
     echo "</table></body></html>";
} else {
    echo "0 results";
}
$conn->close();
?>