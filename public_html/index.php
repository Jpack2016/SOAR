<?php


 ?>

 <!DOCTYPE html>
<html>
<head>
<style>
#grad1 {
    height:100%;
    align-self: center;
    background: #558BD1; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left top, #062C5E, #558BD1); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, #062C5E, #558BD1); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, #062C5E, #558BD1); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, #062C5E, #558BD1); /* Standard syntax (must be last) */
}

#loginbox {
    height:100%;
    margin:auto;
    width:50%;
    display:block;
    padding:50px;
    padding-bottom:350px;
    

}
a {
  color:white;
  font-family: "Verdana", Verdana, sans-serif;
  size:100%;

}

img {
  display:block;
  border: none;
  border-radius: 4px;
  padding: 5px;
  margin:auto;
  width:400px;
}

form {
  margin:auto;
  border-radius: 3px;

}

#welcome {
  display:block;
  font-weight: bold;
  font-size: 2.5em;
  font-family: "Verdana", Verdana, sans-serif;
  margin:auto;
  width:50%;
  color:#B60215;
  text-align:center;
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: #00426B; /* FAU Blue */
    border: none;
    border-radius:4px;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    text-align: center;
}

input[type=text], input[type=password] {
    border:thin;
    border-color:#B60215;
    border-radius:4px;
}

</style>
<body id="grad1">
<div id="loginbox">
<img src="images/logo.png" alt="Logo"><br>
<a id="welcome">Welcome to SOAR<br>
A Resume Builder</a><br><br> 
<center>
  <form action='main_menu.php'>
      <a>Username:</a>&nbsp;
      <input type="text" name="userId"><br><br>
      <a>Password:&nbsp;&nbsp;</a>
      <input type="password" name="userPass"><br><br><br>
      <input type="submit" value="Login">&nbsp;&nbsp;
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
