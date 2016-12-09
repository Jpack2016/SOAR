<?php
require_once('reset.php');
 ?>

 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body background="background.png">
<div id="resetbox">
<center>
  <a>Enter your email to receive a new password</a><br>
  <form action='reset_password.php'>
      <a>Email:</a>
      <input type="text" name="email"><br>
      <input type="submit" value="Reset">
  </form>
</center>
</div>
</body>
</html>
