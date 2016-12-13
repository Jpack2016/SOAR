<?php
require_once "db_connect.php";
require_once "function.php";

if(isset($_POST['search']) && isset($_POST['skills'])){
  $search = $_POST['search'];
  $skills = $_POST['skills'];

  header('Location: search.php?search=' . $search . '&skills=' . $skills . '');
}

if(isset($_POST['search']) ){

  if($_POST['search'] === "study") {
    $sql = "SELECT study_area FROM `ref_study_area`";
    $result = $db->query($sql) or die(mysql_error());
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $data[] = $row['study_area'];
      }
    }
  }

  if($_POST['search'] === "job") {
    $sql = "SELECT position_name FROM `ref_job_position`";
    $result = $db->query($sql) or die(mysql_error());
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $data[] = $row['position_name'];
      }
    }
  }

  if($_POST['search'] === "skill") {
    $sql = "SELECT skill_name FROM `ref_skills`";
    $result = $db->query($sql) or die(mysql_error());
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $data[] = $row['skill_name'];
      }
    }
  }

  if($_POST['search'] === "degree") {
    $sql = "SELECT degree_name FROM `ref_degree`";
    $result = $db->query($sql) or die(mysql_error());
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $data[] = $row['degree_name'];
      }
    }
  }

  $JsonString = json_encode($data);
  file_put_contents('jsonFile.json', $JsonString);

}
?>

<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>SOAR Search</title>

    <link href="soarsearch.css" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    <script>
    $(function() {
        $('#searchargs').show();
        $('#searcharea').hide();

        $( "skills" ).autocomplete({
            source: 'search.php'
        });

        $('#next').on('click', function(e) { // show next form, skills, but hide the rest!
          e.preventDefault;
          $('#searchargs').hide();
          $('#searcharea').show();
        });
    });
    </script>


</head>

<body background="background.png">

  <div id="search">

    <h1>Search for a student</h1>

    <br />

    <form id="seachform" method="POST">

      <div id="searchargs">
        <h2>What would you like to seach for?</h2>
          <p>
            <select name="search">
              <option value="blank"></option>
              <option value="study">Area of Study</option>
              <option value="job">Job</option>
              <option value="skill">Skills</option>
              <option value="degree">Degree</option>
            </select>
          </p>
          <p><input type="button" id="next" value="Next!" /></p>
        </div>

    <div id="searcharea">
      <form id="searchterms" methd="POST">
        <table border="0" width="100%">
          <tr>
            <td>Search Key Words:</td>
            <td><input type="text" name="skills" placeholder="Seacrhing for..."  /></td>
          </tr>
        </table>

        <p><input type="submit" value="Submit!" /></p>

    </form>

  </div>

</body>
</html>


<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <title>PHP MySQL Typeahead Autocomplete</title>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//netsh.pp.ua/upwork-demo/1/js/typeahead.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
    $(function() {
        $( "#skills" ).autocomplete({
            source: 'search.php'
        });
    });
    </script>
</head>

<body>
  <div class="ui-widget">
    <label for="skills">Skills:</label>
    <input id="skills">
  </div>
</body>

</html>-->
