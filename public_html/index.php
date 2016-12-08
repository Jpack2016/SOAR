<?php


 ?>

 <!DOCTYPE html>
<html>
<head>
<style>
#grad1 {
    align-self: center;
    height: 100%;
    background: red; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(left top, #062C5E, #558BD1); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, #062C5E, #558BD1); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, #062C5E, #558BD1); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, #062C5E, #558BD1); /* Standard syntax (must be last) */
}

#loginbox {
    height = 250px;
    width = 500px;
    align-self: center;
}

img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  margin:auto;
  width:40%;
}
form {
  margin:auto;
  width:40%;

}

#welcome {
  font-weight: bold;
  font-size: 2.5em;
  font-family: "Verdana", Verdana, sans-serif;
  margin:auto;
  width:40%;
  color:#B60215
}
.button {
    background-color: #00426B; /* FAU Blue */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<body >
<div id="grad1">
<div id="loginbox">

<img src="images/logo.png" alt="Logo"><br>
<a id="welcome">Welcome to SOAR</a>
  <form >
      <a color:white>User name:</a>
      <input type="text" name="userId"><br><br>
      <a color:white>Password:&nbsp;&nbsp;</a>
      <input type="password" name="userPass"><br>
      <input type="submit" class='button' value="Login">&nbsp;&nbsp;
      <a href='resetPassword.php'>Forgot your password?</a>
      <br><br>
      <a href='signup.php'>Click here to sign up</a>

  </form>
</div>
</div>
</body>
</html>
