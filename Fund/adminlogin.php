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

	$sql="SELECT pass FROM admin WHERE user=$uname;";

	if($res=mysqli_query($db,$sql))
	{
		$val=mysqli_fetch_assoc($res);
		$p=$val['pass'];
		if($p==$pass)
		{
			
			session_start();  
			$_SESSION['sess_user']=$user;
			/* Redirect browser */  
			header("Location: adminindex1.html");
			header("Refresh:0;url='adminindex1.html'");
			
		}
		else
		{
			echo "Wrong Password";
			header("Location: adminindex1.html");
			header("Refresh:1;url='adminlogin.html'");

		}
	}
?>