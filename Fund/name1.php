<?php
	session_start();
	if(!isset($_SESSION['sess_user']))
	{
		header('location:login1.html#popup');
	}
?>
<?php
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$db=mysqli_connect('localhost','root','','fund');

	$sql="SELECT firstname FROM register WHERE user=$uname;";

	echo "welcome";
	echo $user;
?>