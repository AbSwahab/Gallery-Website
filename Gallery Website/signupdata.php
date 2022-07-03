<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="test_db";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if (!$conn)
{
	die("Connection failed:" .mysqli_connect_error());
}

if(isset ($_POST['create']))
{
		$user_name=$_POST['user_name'];
		$pass=$_POST['password'];



		$sql_query = "INSERT INTO users (user_name,password) VALUES('$user_name','$pass')";
		if (mysqli_query($conn,$sql_query))
		{
		
			header("Location: index.php");

		}else{
			echo"error:" .$sql_query."".mysqli_error($conn);
		}
		mysqli_close($conn);
}


?>