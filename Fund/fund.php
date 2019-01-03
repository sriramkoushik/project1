<html>
<head>
<title>Raise Fund</title>

</head>
<body bgcolor="white" width="93%" >
<i>
<form name="f1" method="post" action="fund.php">
<table  width="" cellspacing="5" >
<h2><i>Upload Details</h2>
<tr>
<td>  
<h2><i>Select Type Of Fund</h2>
</td>
<td>
<select name="fundtype">
<option>select</option>
<option value=edu>Educational</option>
<option value=dm>Disaster Management</option>
<option value=health>Health</option></select><br><br></td></tr>
<tr>
<td>
<h2><i>Enter Fund Name</h2>
</td>
<td>
<input type="text" name="fundname" maxlength="25" required placeholder="Fund Name"  size="30"/><br><br>
</td>
</tr>
<tr>
<td>
<h2><i>Enter Account Number</h2>
</td>
<td>
<input type="number" name="acno"  placeholder="Account number" required size="30"/><br><br>
</td>
</tr>
<tr>
<td>
<h2> <i>upload document of proof</i></h2>
</td>
<td>
<input type="file" name="proof" maxlength="25"   size="30"/><br><br>
</td>
</tr>
<tr>
<td>
<h2><i>Date of Fund</h2>
</td>
<td><input type="date" name="date"></td>
</tr>
<td><h2><i>Enter PAN Number</h2></td>
<td>
<input type="number" name="pan" maxlength="10" required placeholder="pan number"  size="30"/><br><br></td></tr>
<tr>
<td>
<h2><i>Address Line 1</h2>
</td>
<td>
<input type="text" name="add1" placeholder="add1" maxlength="25" required></td></tr>
<tr>
<td>
<tr>
<td>
<h2><i>Address Line 2</h2>
</td>
<td>
<input type="text" name ="add2" placeholder="add2" maxlength="26" required></td></tr>
<tr>
<td>
<h2><i>City</h2>
</td>
<td>
<input type="text" name="city" placeholder="city" maxlength="20" required></td></tr><tr><td>
<h2><i>Postal Code</h2>
</td>
<td>
<input type="number" name="pincode" placeholder="postal code" maxlength="6" required></td></tr>
</table>
<table  width="" cellspacing="5" >
<h2><i>Contact Details</h2>
<tr>
<td>
<h2><i>Enter First Name</h2></td>
<td>
<input type="text" name="fname" maxlength="25" required placeholder="first name"  size="30"/><br><br></td></tr>
<tr><td>
<h2><i>Enter Last Name</h2></td>
<td>
<input type="text" name="lname" maxlength="25" required placeholder="last name"  size="30"/><br><br></td></tr>
<tr>
<td><h2><i>Enter Phone Number</h2></td>
<td>
<input type="number" name="phno" maxlength="10" required placeholder="phone number"  size="30"/><br><br></td></tr>
<input type="submit"  name="submit" value="submit"><br><br><br></td></tr>
</table>
</form>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
	
		$fundtype=$_POST['fundtype'];
		$fundname=$_POST['fundname'];
		$acno=$_POST['acno'];
		$proof=$_POST['proof'];
		$date=$_POST['date'];
		$pan=$_POST['pan'];
		$add1=$_POST['add1'];
		$add2=$_POST['add2'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$phno=$_POST['phno'];
		$con=new mysqli("localhost","root","","fund");
		$sql="insert into raise(fundtype,fundname,acno,proof,date,pan,add1,add2,city,pincode,fname,lname,phno) 
					values('$fundtype','$fundname','$acno','$proof','$date','$pan','$add1','$add2','$city','$pincode','$fname','$lname','$phno');";
		if($con->query($sql)==true)
		{
			echo "inserted successfully";
		}
		else
			echo "error:".$sql."<br>".$con->error;
		$con->close();
	}
?>
