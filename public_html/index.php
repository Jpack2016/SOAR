<?php


 ?>

 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<style>

#loginbox {
    height:100%;
    margin:auto;
    width:auto;
    display:block;
    padding:50px;
}

#welcome {
  display:block;
  font-weight: bold;
  font-size: 2.5em;
  font-family: "Verdana", Verdana, sans-serif;
  margin:auto;
  width:auto;
  color:#B60215;
  text-align:center;
}

</style>
</head>
<body>
<div id="loginbox">
<img src="images/logo.png" alt="Logo"><br>
<a id="welcome">Welcome to SOAR<br>
A Resume Builder</a><br><br>
<center>
  <form action='main_menu.php'>
      <a>Email:</a>&nbsp;
      <input type="text" name="userId"><br><br>
      <a>Password:&nbsp;&nbsp;</a>
      <input type="password" name="userPass"><br><br><br>
      <input type="submit" value="Login">
      <br><br>
  </form>
  <form action='signup.php'>
      <input type='submit'  value='Click here to sign up'>

  </form>
  <a href='resetPassword.php'>Forgot your password?</a>
</center>
</div>
</body>
</html>
