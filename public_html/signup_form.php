<?php
require_once('signup.php');
?>

 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
.divTable{
	display: table;
	width: auto;
  margin: auto;
}
.divTR {
	display: table-row;
}

.divTD, .divTableHead {
  font-family: "Verdana", Verdana, sans-serif;
	border: none;
	display: table-cell;
	padding: 3px 10px;
  align-content: flex-start;
}
.divTableBody {
	display: table-row-group;
}
</style>
</head>
<body>
<div>
<center>
  <a>Please enter your information:</a><br><br>

  <form action="signup_form.php" method:"POST">
    <div class="divTable">
      <div class="divTR">
        <div class="divTD"><a>Email:</a></div>
        <div class="divTD"><input type="text" name="email"></div>
      </div>
      <div class="divTR">
        <div class="divTD"><a>Password:&nbsp;&nbsp;</a></div>
        <div class="divTD"><input type="password" name="password"></div>
      </div>
      <div class="divTR">
        <div class="divTD"><a>Retype password:</a></div>
        <div class="divTD"><input type="password" name="password2"></div>
      </div>
      <div class="divTR">
        <div class="divTD"><a>First Name:</a></div>
        <div class="divTD"><input type="text" name="first_name"></div>
      </div>
      <div class="divTR">
        <div class="divTD"><a>Last Name:</a></div>
        <div class="divTD"><input type="text" name="last_name"></div>
      </div>
      <div class="divTR">
        <div class="divTD"><a>Student Z Number:</a></div>
        <div class="divTD"><input type="text" name="student_id"></div>
      </div>
    </div>
    <input type="submit" value="Create">
  </form>
</center>
</div>
</body>
</html>
