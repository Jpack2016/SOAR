<?php
    echo "actually trying";
    if(isset($_POST['study']))
    {
      $query = $db->query("SELECT * FROM ref_study_area WHERE study_area LIKE '%".$q."%' ORDER BY study_area ASC");
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['fname']);
      }
    }

    if(isset($_POST['degree']))
    {
      $query = $db->query("SELECT * FROM ref_degree WHERE degree_name LIKE '%".$q."%' ORDER BY degree_name ASC");
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['fname']);
      }
    }

    if(isset($_POST['job']))
    {
      $query = $db->query("SELECT * FROM ref_job_position WHERE position_name LIKE '%".$q."%' ORDER BY position_name ASC");
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['fname']);
      }
    }

    if(isset($_POST['skill']))
    {
      $query = $db->query("SELECT * FROM ref_skills WHERE skill_name LIKE '%".$q."%' ORDER BY skill_name ASC");
      $dropdown=array();
        while($row = mysql_fetch_array($result)) {
          array_push($dropdown, $row['skill_name']);
        }
    }

    print_r($dropdown);
?>
