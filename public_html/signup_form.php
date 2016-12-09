<?php
#include_once('signup.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<body>
<div>
<center>
  <a>Please enter your information:</a><br><br>
  <form action="signup_form.php">
      <a>Email:</a>&nbsp;
      <input type="text" name="email"><br><br>
      <a>Password:&nbsp;&nbsp;</a>
      <input type="password" name="password"><br><br>
      <a>Retype password:&nbsp;&nbsp;</a>
      <input type="password" name="password"><br><br>
      <a>First Name:</a>
      <input type="text" name="first_name"><br><br>
      <a>Last Name:</a>
      <input type="text" name="last_name"><br><br>
      <a>Student Z Number:</a>
      <input type="text" name="student_id"><br><br>
      <input type="submit" value="Create">
      <br><br>
  </form>
</center>
</div>
</body>
</html>
