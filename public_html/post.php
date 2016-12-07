<?php
require_once 'db_connect.php';
require_once 'function.php';
session_start();
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['first_name']))
{
  $login = '';
  $_first_name = '';
  $_last_name = '';
  $_student_id = '';
  $_email = '';
  $_open_id = '';
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

  $login = sanitizeString($db, $_POST['login']);
  $first_name = sanitizeString($db, $_POST['first_name']);
  $last_name = sanitizeString($db, $_POST['last_name']);
  $student_id = sanitizeString($db, $_POST['student_id']);
  $email = sanitizeString($db, $_POST['email']);
  $open_id = sanitizeString($db, $_POST['open_id']);
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

  echo $login, $_first_name, $_last_name, $_student_id, $_email, $_open_id, $_address1, $_address2, $_address3, $_city, $_state_code, $_zip, $_country, $_phone1, $_phone2, $_summary_text, $_additional_text,
  $_school_name, $_degree_type_name, $_study_area, $_graduation_month, $_graduation_year, $_job_position_name, $_company_name, $_start_date, $_end_date, $_skill_name, $_proficiency_name;
}

?>
