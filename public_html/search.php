<<<<<<< Updated upstream
<?php
    require_once 'db_connect.php';
    echo "actually trying";
    if(isset($_POST['study']))
    {
      $result = $db->query("SELECT * FROM ref_study_area WHERE study_area LIKE '%".$q."%' ORDER BY study_area ASC");

      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['fname']);
      }
    }

    if(isset($_POST['degree']))
    {
      $result = $db->query("SELECT * FROM ref_degree WHERE degree_name LIKE '%".$q."%' ORDER BY degree_name ASC");
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['fname']);
      }
    }

    if(isset($_POST['job']))
    {
      $result = $db->query("SELECT * FROM ref_job_position WHERE position_name LIKE '%".$q."%' ORDER BY position_name ASC");
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['fname']);
      }
    }

    if(isset($_POST['skill']))
    {
      $result = $db->query("SELECT * FROM ref_skills WHERE skill_name LIKE '%".$q."%' ORDER BY skill_name ASC");
      echo "$result ".$result;
      $dropdown=array();
        while($row = mysql_fetch_array($result)) {
          array_push($dropdown, $row['skill_name']);
        }
    }

    print_r($dropdown);
?>
=======
<?php
    require_once 'db_connect.php';
    echo "actually trying";
    if($_POST['search']=='study')
    {
      $sql="SELECT study_area FROM ref_study_area ORDER BY study_area ASC";
      $result = mysql_query($sql);
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['degree_name']);
      }
    }

    if($_POST['search']=='degree')
    {
      $sql="SELECT degree_name FROM ref_degree  ORDER BY degree_name ASC";
      $result = mysql_query($sql);
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['degree_name']);
      }
    }

    if($_POST['search']=='job')
    {
      $sql="SELECT position_name FROM ref_job_position ORDER BY position_name ASC";
      $result = mysql_query($sql);
      $dropdown=array();

      while($row = mysql_fetch_array($result)) {
        array_push($dropdown, $row['position_name']);
      }
    }

    if($_POST['search']=='skill')
    {
      $sql="SELECT skill_name FROM ref_skills ORDER BY skill_name ASC";
      $result = mysql_query($sql);
	echo $result;
	echo $sql;
      $dropdown=array();

        while($row = mysql_fetch_array($result)) {
          array_push($dropdown, $row['skill_name']);
        }
    }

    print_r($dropdown);



?>
>>>>>>> Stashed changes
