<?php
function reset($_reset_email)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++)
  {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  $salt1 = "qm&h*";
  $salt2 = "pg!@";
  $token = hash('ripemd128', "$salt1$randomString$salt2");
  $query = "UPDATE students SET password='$token' WHERE email='$_reset_email'";
  $result = $db->query($query);

  // The message
  $message = "Here is your new password:\r\n$randomString\r\nLine 3";
  // Send
  mail($_reset_email, 'Password Reset', $message);
}
/*
isset($_POST['email']) {
  reset($_POST['email']);
  header('Location:/email_sent.html');
}*/

?>
