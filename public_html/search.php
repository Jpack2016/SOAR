<?php
    require_once 'db_connect.php';
    echo "actually trying";
    if($_POST['search']=='study')
    {
      $sql='SELECT study_area FROM ref_study_area ORDER BY study_area ASC';
      $result = $db.mysql_query($sql);
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['degree_name']);
      }
    }

    if($_POST['search']=='degree')
    {
      $sql='SELECT degree_name FROM ref_degree  ORDER BY degree_name ASC';
      $result = $db.mysql_query($sql);
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['degree_name']);
      }
    }

    if($_POST['search']=='job')
    {
      $sql='SELECT position_name FROM ref_job_position ORDER BY position_name ASC';
      $result = $db.mysql_query($sql);
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        print_r($row);
      }
    }

    if($_POST['search']=='skill')
    {
      $query = $db->query("SELECT skill_name FROM ref_skills ORDER BY skill_name ASC");
      $dropdown=array();
        while($row = mysql_fetch_assoc($query)) {
          array_push($dropdown, $row['skill_name']);
        }
    }

    print_r($dropdown);



?>
