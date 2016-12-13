
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
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>

</head>

<body background="background.png">

  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Z-Number</th>
      <th>Email</th>
      <th>Resume</th>
    </tr>
    <?php
      require_once "db_connect.php";
      require_once "function.php";
      session_start();

      if($_get['search'] == "study" && isset($_get['skills'])) {
        $term = $_get['skills'];
        $sql = "SELECT student_id FROM student_education WHERE study_area LIKE '$term'";
        $result = $db->query($sql) or die(mysql_error());
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $data[] = $row['student_id'];
          }
        }

        $data = array_unique($data);

        foreach ($data as $key => $value) {
        echo "{$key} => {$value} ";
        SearchResults($db,$value);
        }

      }

      if($_get['search'] == "job" && isset($_get['skills'])) {
        $term = $_get['skills'];
        $sql = "SELECT student_id FROM student_experience WHERE job_position_name LIKE '$term'";
        $result = $db->query($sql) or die(mysql_error());
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $data[] = $row['student_id'];
          }
        }

        $data = array_unique($data);

        foreach ($data as $key => $value) {
        echo "{$key} => {$value} ";
        SearchResults($db,$value);
        }

      }

      if($_get['search'] == "skill" && isset($_get['skills'])) {
        $term = $_get['skills'];
        $sql = "SELECT student_id FROM student_skills WHERE	proficiency_name LIKE '$term'";
        $result = $db->query($sql) or die(mysql_error());
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $data[] = $row['student_id'];
          }
        }

        $data = array_unique($data);

        foreach ($data as $key => $value) {
        echo "{$key} => {$value} ";
        SearchResults($db,$value);
        }

      }

      if($_get['search'] == "degree" && isset($_get['skills'])) {
        $term = $_get['skills'];
        $sql = "SELECT student_id FROM student_education WHERE degree_name LIKE 'bachelors'";
        $result = $db->query($sql) or die(mysql_error());
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $data[] = $row['student_id'];
          }
        }

        $data = array_unique($data);

        foreach ($data as $key => $value) {
            echo "{$key} => {$value} ";
            SearchResults($db,$value);
        }

      }

    ?>

  </table>

</body>
</html>
