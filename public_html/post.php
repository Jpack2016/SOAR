<?php
require_once 'db_connect.php';
require_once 'function.php';
session_start();
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['address1'])||isset($_POST['phone1'])||isset($_POST['school_name'])||isset($_POST['company_name'])||isset($_POST['skill_name']))
{
  $_address1 = '';
  $_address2 = '';
  $_address3 = '';
  $_city = '';
  $_state_code = '';
  $_zip = '';
  $_country = '';
  $_phone1 = '';
  $_phone2 = '';
  $_summary_text = '';
  $_additional_text = '';
  $_school_name = '';
  $_degree_type_name = '';
  $_study_area = '';
  $_graduation_month = '';
  $_graduation_year = '';
  $_job_position_name = '';
  $_company_name = '';
  $_start_date = '';
  $_end_date = '';
  $_skill_name = '';
  $_proficiency_name = '';

  $address1 = sanitizeString($db, $_POST['address1']);
  $address2 = sanitizeString($db, $_POST['address2']);
  $address3 = sanitizeString($db, $_POST['address3']);
  $city = sanitizeString($db, $_POST['city']);
  $state_code = sanitizeString($db, $_POST['state_code']);
  $zip = sanitizeString($db, $_POST['zip']);
  $country = sanitizeString($db, $_POST['country']);
  $phone1 = sanitizeString($db, $_POST['phone1']);
  $phone2 = sanitizeString($db, $_POST['phone2']);
  $summary_text = sanitizeString($db, $_POST['summary_text']);
  $additional_text = sanitizeString($db, $_POST['additional_text']);
  $school_name = sanitizeString($db, $_POST['school_name']);
  $degree_name = sanitizeString($db, $_POST['degree_name']);
  $study_area = sanitizeString($db, $_POST['study_area']);
  $graduation_month = sanitizeString($db, $_POST['graduation_month']);
  $graduation_year = sanitizeString($db, $_POST['graduation_year']);
  $job_position_name = sanitizeString($db, $_POST['job_position_name']);
  $company_name = sanitizeString($db, $_POST['company_name']);
  $start_date = sanitizeString($db, $_POST['start_date']);
  $end_date = sanitizeString($db, $_POST['end_date']);
  $skill_name = sanitizeString($db, $_POST['skill_name']);
  $proficiency_name = sanitizeString($db, $_POST['proficiency_name']);

  echo $address1, $address2, $address3, $city, $state_code, $zip, $country, $phone1, $phone2, $summary_text, $additional_text,
  $school_name, $degree_type_name, $study_area, $graduation_month, $graduation_year, $job_position_name, $company_name, $start_date, $end_date, $skill_name, $proficiency_name;

  $student_id = $_SESSION['studentid'];

  SaveStudentInfoToDB($db, $student_id, $address1, $address2, $address3, $city, $state_code, $zip, $country, $phone1, $phone2);
  SaveStudentSummaryToDB($db, $student_id, $summary_text);
  SaveStudentAdditionalToDB($db, $student_id, $additional_text);
  SaveStudentEducationToDB($db, $student_id, $school_name, $degree_name, $study_area, $graduation_month, $graduation_year);
  SaveStudentExperienceToDB($db, $student_id, $job_position_name, $company_name, $start_date, $end_date);
  SaveStudentSkillsToDB($db, $student_id, $skill_name, $proficiency_name);

  $proficiency_query = mysqli_query($db, "SELECT * FROM ref_proficiency WHERE proficiency_name='".$proficiency_name."'");
  if(!mysqli_num_rows($proficiency_query) > 0)
    SaveRefProficiencyToDB($db, $proficiency_name);
  }

  $skill_query = mysqli_query($db, "SELECT * FROM ref_skills WHERE skill_name='".$skill_name."'");
  if(!mysqli_num_rows($skill_query) > 0)
      SaveRefSkillsToDB($db, $skill_name);
  }

  $study_area_query = mysqli_query($db, "SELECT * FROM ref_study_area WHERE study_area='".$study_area."'");
  if(!mysqli_num_rows($study_area_query) > 0)
    SaveRefStudyAreaToDB($db, $study_area);
  }

  $position_query = mysqli_query($db, "SELECT * FROM ref_job_position WHERE position_name='".$position_name."'");
  if(!mysqli_num_rows($position_query) > 0)
    SaveRefJobPositionToDB($db, $position_name);
  }

  $degree_query = mysqli_query($db, "SELECT * FROM ref_degree WHERE degree_name='".$degree_name."'");
  if(!mysqli_num_rows($degree_query) > 0)
    SaveRefDegreeToDB($db, $degree_name);
  }

}

?>
