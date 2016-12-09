<?php
function signup() {
  require_once 'db_connect.php';
  require_once 'function.php';
  $salt1 = "qm&h*";
  $salt2 = "pg!@";

  $login = '';
  $_first_name = '';
  $_last_name = '';
  $_student_id = '';
  $_email = '';
  $_password = '';

  $login = sanitizeString($db, $_POST['login']);
  $first_name = sanitizeString($db, $_POST['first_name']);
  $last_name = sanitizeString($db, $_POST['last_name']);
  $student_id = sanitizeString($db, $_POST['student_id']);
  $email = sanitizeString($db, $_POST['email']);
  $password = sanitizeString($db, $_POST['password']);

  $token = hash('ripemd128', "$salt1$password$salt2");

  SaveStudentsToDB($db, $login, $first_name, $last_name, $student_id, $email , $token);
?>
