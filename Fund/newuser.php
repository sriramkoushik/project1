<html>
<head>
<title>REGISTRATION PAGE</title>
<link href="stylenewuser.css" rel="stylesheet" type="text/css">
</head>
<html>
<body>
<form name="f1" method="post" action="index1.html">
<table width="100%">
<tr>
<td><h4>First Name:</h4></td>
<td>
<input type="text" name="firstname"size="30">
</td>
</tr>
<tr>
<td><h4>Last Name:</h4></td>
<td>
<input type="text" name="lastname"size="30">
</td>
</tr>
<tr>
<td><h4Gender:</h4></td>
<td>
<h5>Male<input type="radio" name="gender" value="Male"></h5>
<h5>Female<input type="radio" name="gender" value="Female"></h5>
</td>
</tr>
<tr>
<td>
<h4>Dateof Birth:</h4>
</td>
<td>
<input type="date" name="dob"size="30">
</td>
</tr>
<tr>
<td>
<h4>User Name:</h4>
</td>
<td>
<input type="text" name="username" size="30" maxlength="25"></h5>
</td>
</tr>
<tr>
<td>
<h4>password:</h4>
</td>
<td>
<input type="password"name="password"size="30">
</td>
</tr>
<tr>
<td>
<h4>Address:</h4>
</td>
<td>
<textarea rows="10" cols="20"name="address">
</textarea>
</td>
</tr>
<tr>
<td>
<h4>Postal Code:</h4>
</td>
<td><input type="number" name="pincode" size="30" maxlength="6"></td>
</tr>
<tr>
<td>
<h4>PhoneNo:</h4></td>
</td>
<td>
<input type="number"name="phoneno"size="30"maxlength="10">
</td>
</tr>
<tr>
<td>
<h4>Mail Id:</h4></td>
<td>
<input type="email"name="mailid"size="30">
</td>
</tr>
<tr align="center">
<td>
<input type="submit" name="submit">
<input type="reset" value="reset">
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$fn=$_POST['firstname'];
		$ln=$_POST['lastname'];
		$gen=$_POST['gender'];
		$dob=$_POST['dob'];
		$un=$_POST['username'];
		$pwd=$_POST['password'];
		$add=$_POST['address'];
		$pc=$_POST['pincode'];
		$pn=$_POST['phoneno'];
		$mail=$_POST['mailid'];
		$con=new mysqli("localhost","root","","fund");
		$sql="insert into register(firstname,lastname,gender,dob,uname,password,address,pincode,ph_no,email) 
					values('$fn','$ln','$gen','$dob','$un','$pwd','$add','$pc','$pn','$mail')";
		if($con->query($sql)==true)
		{
			echo "inserted successfully";
		}
		else
			echo "error:".$sql."<br>".$con->error;
		$con->close();
	}
?>
