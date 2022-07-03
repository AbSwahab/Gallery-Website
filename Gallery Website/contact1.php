<?php
    session_start();
if(isset ($_POST['submit']))
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact us form validation Using Javascript</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#black").click(function(){
    $("body").toggleClass('blackk');
    $("li,h3,p").toggleClass('blackk1');

  });
});
</script>
</head>
<body>
    <div>
 <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="aboutUs.html">About us</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="How.html">How?</a></li>
            <li><a class="active"href="contact1.php">Contact</a></li>
            <li><a href="product.html">products</a></li>
            <li><a href="ouraccounts.html">Accounts</a></li>
            <li id="black" style="float: right;"><a>mood</a></li>
        </ul>

    </div>

<div class="wrapper">
  <h2>Contact us</h2>
  <div id="error_message"></div>
  <form action="contact.php" method="post">
    <div class="input_field">
        <input type="text" placeholder="Name" name="name" id="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" name="phone"id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" name="email"id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" name="message"id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit" name="submit" value="submit">
    </div>
  </form>
</div>

</body>
</html>
