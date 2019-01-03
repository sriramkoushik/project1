<?php  
if(isset($_POST["submit"]))
{  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) 
{  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=new mysqli('localhost','root','','projectdb');  
    $sql="SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'";
	$result=$con->query($sql);
	if($result==true)
	{
		  
		if($result->num_rows>=1)  
		{  
			while($row=$result->fetch_assoc())  
			{  
				$dbusername=$row['username'];  
				$dbpassword=$row['password'];  
			}  
			if($user == $dbusername && $pass == $dbpassword)  
			{  
				session_start();  
				$_SESSION['sess_user']=$user;  
	
				/* Redirect browser */  
				header("Location: index1.html"); 
			}
			else
			{
				echo "error:".$sql."<br>".$con->error;
			}	
			$con->close();
		}  
    } 
	else
	{  
		echo "Invalid username or password!";  
    }  
  
}
else
{  
    echo "All fields are required!";  
}    
}
?>  
