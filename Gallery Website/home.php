<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

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
     <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
     <button><a href="logout.php">Logout</a></button>
     <div>
          <button><a href="home.html">Start</a></button>
     </div>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>