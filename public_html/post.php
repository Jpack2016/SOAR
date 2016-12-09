<?php
require_once 'db_connect.php';
require_once 'function.php';
session_start();
error_reporting(E_ALL ^ E_NOTICE);

/*echo $_POST['address1'] .  '<br />';//
echo $_POST['address2'] .  '<br />';
echo $_POST['address3'] .  '<br />';
echo $_POST['city'] .  '<br />';
echo $_POST['state_code'] .  '<br />';
echo $_POST['zip'] .  '<br />';
echo $_POST['country'] .  '<br />';
echo $_POST['phone1'] .  '<br />';//
echo $_POST['phone2'] .  '<br />';

echo $_POST['school_name1'] . '<br />';
echo $_POST['degree_name1'] . '<br />';
echo $_POST['study_area1'] . '<br />';
echo $_POST['graduation_month1'] . '<br />';
echo $_POST['graduation_year1'] . '<br />';
echo $_POST['job_position_name1'] . '<br />';
echo $_POST['company_name1'] . '<br />';
echo $_POST['start_date1'] . '<br />';
echo $_POST['end_date1'] . '<br />';
echo $_POST['skill_name1'] . '<br />';
echo $_POST['proficiency_name1'] . '<br />';*/

if(isset($_POST['address1'])||isset($_POST['phone1'])||isset($_POST['school_name1'])||isset($_POST['company_name1'])||isset($_POST['skill_name1']))
{
  $address1 = '';
  $address2 = '';
  $address3 = '';
  $city = '';
  $state_code = '';
  $zip = '';
  $country = '';
  $phone1 = '';
  $phone2 = '';
  $summary_text = '';
  $additional_text = '';

  $school_name1 = '';
  $degree_name1 = '';
  $study_area1 = '';
  $graduation_month1 = '';
  $graduation_year1 = '';
  $job_position_name1 = '';
  $company_name1 =  '';
  $start_date1 =  '';
  $end_date1 =  '';
  $skill_name1 =  '';
  $proficiency_name1 = '';

  $school_name2 = '';
  $degree_name2 = '';
  $study_area2 = '';
  $graduation_month2 = '';
  $graduation_year2 = '';
  $job_position_name2 = '';
  $company_name2 =  '';
  $start_date2 =  '';
  $end_date2 =  '';
  $skill_name2 =  '';
  $proficiency_name2 = '';

  $school_name3 = '';
  $degree_name3 = '';
  $study_area3 = '';
  $graduation_month3 = '';
  $graduation_year3 = '';
  $job_position_name3 = '';
  $company_name3 =  '';
  $start_date3 =  '';
  $end_date3 =  '';
  $skill_name3 =  '';
  $proficiency_name3 = '';

  $student_id = $_SESSION['studentid'];
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
  $school_name1 = sanitizeString($db, $_POST['school_name1']);
  $degree_name1 = sanitizeString($db, $_POST['degree_name1']);
  $study_area1 = sanitizeString($db, $_POST['study_area1']);
  $graduation_month1 = sanitizeString($db, $_POST['graduation_month1']);
  $graduation_year1 = sanitizeString($db, $_POST['graduation_year1']);
  $job_position_name1 = sanitizeString($db, $_POST['job_position_name1']);
  $company_name1 = sanitizeString($db, $_POST['company_name1']);
  $start_date1 = sanitizeString($db, $_POST['start_date1']);
  $end_date1 = sanitizeString($db, $_POST['end_date1']);
  $skill_name1 = sanitizeString($db, $_POST['skill_name1']);
  $proficiency_name1 = sanitizeString($db, $_POST['proficiency_name1']);

  SaveStudentInfoToDB($db, $student_id, $address1, $address2, $address3, $city, $state_code, $zip, $country, $phone1, $phone2);
  SaveStudentSummaryToDB($db, $student_id, $summary_text);
  SaveStudentAdditionalToDB($db, $student_id, $additional_text);
  SaveStudentEducationToDB($db, $student_id, $school_name1, $degree_name1, $study_area1, $graduation_month1, $graduation_year1);
  SaveStudentExperienceToDB($db, $student_id, $job_position_name1, $company_name1, $start_date1, $end_date1);
  SaveStudentSkillsToDB($db, $student_id, $skill_name1, $proficiency_name1);

  if(isset($_POST['school_name2'])||isset($_POST['company_name2'])||isset($_POST['skill_name2']))
  {
  $school_name2 = sanitizeString($db, $_POST['school_name2']);
  $degree_name2 = sanitizeString($db, $_POST['degree_name2']);
  $study_area2 = sanitizeString($db, $_POST['study_area2']);
  $graduation_month2 = sanitizeString($db, $_POST['graduation_month2']);
  $graduation_year2 = sanitizeString($db, $_POST['graduation_year2']);
  $job_position_name2 = sanitizeString($db, $_POST['job_position_name2']);
  $company_name2 = sanitizeString($db, $_POST['company_name2']);
  $start_date2 = sanitizeString($db, $_POST['start_date2']);
  $end_date2 = sanitizeString($db, $_POST['end_date2']);
  $skill_name2 = sanitizeString($db, $_POST['skill_name2']);
  $proficiency_name2 = sanitizeString($db, $_POST['proficiency_name2']);
  SaveStudentEducationToDB($db, $student_id, $school_name2, $degree_name2, $study_area2, $graduation_month2, $graduation_year2);
  SaveStudentExperienceToDB($db, $student_id, $job_position_name2, $company_name2, $start_date2, $end_date2);
  SaveStudentSkillsToDB($db, $student_id, $skill_name2, $proficiency_name2);
}
if(isset($_POST['school_name3'])||isset($_POST['company_name3'])||isset($_POST['skill_name3']))
{
  $school_name3 = sanitizeString($db, $_POST['school_name3']);
  $degree_name3 = sanitizeString($db, $_POST['degree_name3']);
  $study_area3 = sanitizeString($db, $_POST['study_area3']);
  $graduation_month3 = sanitizeString($db, $_POST['graduation_month3']);
  $graduation_year3 = sanitizeString($db, $_POST['graduation_year3']);
  $job_position_name3 = sanitizeString($db, $_POST['job_position_name3']);
  $company_name3 = sanitizeString($db, $_POST['company_name3']);
  $start_date3 = sanitizeString($db, $_POST['start_date3']);
  $end_date3 = sanitizeString($db, $_POST['end_date3']);
  $skill_name3 = sanitizeString($db, $_POST['skill_name3']);
  $proficiency_name3 = sanitizeString($db, $_POST['proficiency_name3']);
  SaveStudentEducationToDB($db, $student_id, $school_name3, $degree_name3, $study_area3, $graduation_month3, $graduation_year3);
  SaveStudentExperienceToDB($db, $student_id, $job_position_name3, $company_name3, $start_date3, $end_date3);
  SaveStudentSkillsToDB($db, $student_id, $skill_name3, $proficiency_name3);
}
  /*$proficiency_query = mysqli_query($db, "SELECT * FROM ref_proficiency WHERE proficiency_name='".$proficiency_name."'");
  if(!mysqli_num_rows($proficiency_query) > 0)
  {
    SaveRefProficiencyToDB($db, $proficiency_name);
  }*/
  $_SESSION['address1'] = $address1;
  $_SESSION['address2'] = $address2;
  $_SESSION['address3'] = $address3;
  $_SESSION['city'] = $city;
  $_SESSION['state_code'] =  $state_code;
  $_SESSION['zip'] = $zip;
  $_SESSION['country'] = $country;
  $_SESSION['phone1'] = $phone1;
  $_SESSION['phone2'] = $phone2;
  $_SESSION['summary_text'] =  $summary_text;
  $_SESSION['additional_text'] =  $additional_text;
  $_SESSION['school_name1'] = $school_name1;
  $_SESSION['degree_name1'] = $degree_name1;
  $_SESSION['study_area1'] = $study_area1;
  $_SESSION['graduation_month1'] = $graduation_month1;
  $_SESSION['graduation_year1'] =  $graduation_year1;
  $_SESSION['job_position_name1'] = $job_position_name1;
  $_SESSION['company_name1'] = $company_name1;
  $_SESSION['start_date1'] = $start_date1;
  $_SESSION['end_date1'] = $end_date1;
  $_SESSION['skill_name1'] = $skill_name1;
  $_SESSION['proficiency_name1'] = $proficiency_name1;
  $_SESSION['school_name2'] = $school_name2;
  $_SESSION['degree_name2'] = $degree_name2;
  $_SESSION['study_area2'] = $study_area2;
  $_SESSION['graduation_month2'] = $graduation_month2;
  $_SESSION['graduation_year2'] =  $graduation_year2;
  $_SESSION['job_position_name2'] = $job_position_name2;
  $_SESSION['company_name2'] = $company_name2;
  $_SESSION['start_date2'] = $start_date2;
  $_SESSION['end_date2'] = $end_date2;
  $_SESSION['skill_name2'] = $skill_name2;
  $_SESSION['proficiency_name2'] = $proficiency_name2;
  $_SESSION['school_name3'] = $school_name3;
  $_SESSION['degree_name3'] = $degree_name3;
  $_SESSION['study_area3'] = $study_area3;
  $_SESSION['graduation_month3'] = $graduation_month3;
  $_SESSION['graduation_year3'] =  $graduation_year3;
  $_SESSION['job_position_name3'] = $job_position_name3;
  $_SESSION['company_name3'] = $company_name3;
  $_SESSION['start_date3'] = $start_date3;
  $_SESSION['end_date3'] = $end_date3;
  $_SESSION['skill_name3'] = $skill_name3;
  $_SESSION['proficiency_name3'] = $proficiency_name3;

  $skill_query = mysqli_query($db, "SELECT * FROM ref_skills WHERE skill_name='".$skill_name1."'");
  if(!mysqli_num_rows($skill_query) > 0)
  {
      SaveRefSkillsToDB($db, $skill_name1);
  }
  $study_area_query = mysqli_query($db, "SELECT * FROM ref_study_area WHERE study_area='".$study_area1."'");
  if(!mysqli_num_rows($study_area_query) > 0)
  {
    SaveRefStudyAreaToDB($db, $study_area1);
  }
  $position_query = mysqli_query($db, "SELECT * FROM ref_job_position WHERE position_name='".$position_name1."'");
  if(!mysqli_num_rows($position_query) > 0)
  {
    SaveRefJobPositionToDB($db, $position_name1);
  }
  $degree_query = mysqli_query($db, "SELECT * FROM ref_degree WHERE degree_name='".$degree_name1."'");
  if(!mysqli_num_rows($degree_query) > 0)
  {
    SaveRefDegreeToDB($db, $degree_name1);
  }

  $skill_query = mysqli_query($db, "SELECT * FROM ref_skills WHERE skill_name='".$skill_name2."'");
  if(!mysqli_num_rows($skill_query) > 0)
  {
      SaveRefSkillsToDB($db, $skill_name2);
  }
  $study_area_query = mysqli_query($db, "SELECT * FROM ref_study_area WHERE study_area='".$study_area2."'");
  if(!mysqli_num_rows($study_area_query) > 0)
  {
    SaveRefStudyAreaToDB($db, $study_area2);
  }
  $position_query = mysqli_query($db, "SELECT * FROM ref_job_position WHERE position_name='".$position_name2."'");
  if(!mysqli_num_rows($position_query) > 0)
  {
    SaveRefJobPositionToDB($db, $position_name2);
  }
  $degree_query = mysqli_query($db, "SELECT * FROM ref_degree WHERE degree_name='".$degree_name2."'");
  if(!mysqli_num_rows($degree_query) > 0)
  {
    SaveRefDegreeToDB($db, $degree_name2);
  }

  $skill_query = mysqli_query($db, "SELECT * FROM ref_skills WHERE skill_name='".$skill_name3."'");
  if(!mysqli_num_rows($skill_query) > 0)
  {
      SaveRefSkillsToDB($db, $skill_name3);
  }
  $study_area_query = mysqli_query($db, "SELECT * FROM ref_study_area WHERE study_area='".$study_area3."'");
  if(!mysqli_num_rows($study_area_query) > 0)
  {
    SaveRefStudyAreaToDB($db, $study_area3);
  }
  $position_query = mysqli_query($db, "SELECT * FROM ref_job_position WHERE position_name='".$position_name3."'");
  if(!mysqli_num_rows($position_query) > 0)
  {
    SaveRefJobPositionToDB($db, $position_name3);
  }
  $degree_query = mysqli_query($db, "SELECT * FROM ref_degree WHERE degree_name='".$degree_name3."'");
  if(!mysqli_num_rows($degree_query) > 0)
  {
    SaveRefDegreeToDB($db, $degree_name3);
  }

}

header('location: main_menu.php');
?>
