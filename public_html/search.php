<?php
  require_once "db_connect.php";
  require_once "function.php";

  $sql = "SELECT skill_name FROM `ref_skills`";
  $result = $db->query($sql) or die(mysql_error());
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $data[] = $row['skill_name'];
    }
}

  echo json_encode($data);
?>
