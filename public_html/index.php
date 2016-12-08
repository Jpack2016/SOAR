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
#logobox {

}
#loginbox {
    height = 250px;
    width = 500px;
    align-self: center;
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
  width:40%;
  border-radius: 3px;

}

#welcome {
  display:block;
  font-weight: bold;
  font-size: 2.5em;
  font-family: "Verdana", Verdana, sans-serif;
  margin:auto;
  width:40%;
  color:#B60215
}

input[type=button], input[type=submit], input[type=reset] {
    background-color: #00426B; /* FAU Blue */
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    text-align: center;
}

</style>
<body >
<div id="grad1">
<div id="loginbox">
<div>
<img margin='auto' src="images/logo.png" alt="Logo"><br>
<a margin='auto' id="welcome">Welcome to SOAR</a><br><br>
</div>
  <form >
      <a>User name:</a>
      <input type="text" name="userId"><br><br>
      <a>Password:&nbsp;&nbsp;</a>
      <input type="password" name="userPass"><br><br><br>
      <input type="submit" class='button' value="Login">&nbsp;&nbsp;
      <a href='resetPassword.php'>Forgot your password?</a>
      <br><br>
      <input type='button' href='signup.php' value='Click here to sign up'>

  </form>
</div>
</div>
</body>
</html>
