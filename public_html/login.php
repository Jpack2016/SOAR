<?php
function login() {
  require_once 'db_connect.php';
  require_once 'function.php';
  $salt1 = "qm&h*";
  $salt2 = "pg!@";

  $_email = '';
  $_password = '';

  $email = sanitizeString($db, $_POST['emaillogin']);
  $password = sanitizeString($db, $_POST['passwordlogin']);

  $query  = "SELECT * FROM users WHERE email='$email'";
  $result = $db->query($query);
  if ($result->num_rows)
  {
      $row = $result->fetch_array(MYSQLI_NUM);
      $result->close();

      $salt1 = "qm&h*";
      $salt2 = "pg!@";
      $token = hash('ripemd128', "$salt1$password$salt2");

      if ($token == $row[1])
      {
        echo "success";
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "<h3> Login Successful";
      }
      else echo "<h3> Invalid Username/Password </h3>";
  }
  else echo "<h3> Invalid Username/Password </h3>";
}

 ?>
