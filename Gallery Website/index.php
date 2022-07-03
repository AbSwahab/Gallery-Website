<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>

	<link rel="stylesheet" type="text/css" href="css/stylee.css">
	<style>
		body{
			  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('images/galleryimg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
		}
	</style>
</head>
<body>
	<h1 style="font-size: 90px;">Gallery</h1>
     <form action="login.php" method="post">
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     	<button type="submit"><a href="signup.php">Signup</a></button>
     </form>
</body>
</html>