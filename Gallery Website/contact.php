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

if(isset ($_POST['submit']))
{
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$message=$_POST['message'];


		$sql_query = "INSERT INTO contact(name,phone,email,message) VALUES('$name','$phone','$email','$message')";
		if (mysqli_query($conn,$sql_query))
		{
		
			header("Location: Home.html");

		}else{
			echo"error:" .$sql."".mysqli_error($conn);
		}
		mysqli_close($conn);
}


?>