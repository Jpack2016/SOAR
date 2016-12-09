<?php

function sanitizeString($_db, $str)
{
    $str = strip_tags($str);
    $str = htmlentities($str);
    $str = stripslashes($str);
    return mysqli_real_escape_string($_db, $str);
}

function SaveStudentsToDB($_db, $_first_name, $_last_name, $_student_id, $_email , $_password)
{
  /* Prepared statement, stage 1: prepare query */
  if (!($stmt = $_db->prepare("INSERT INTO students(first_name, last_name, student_id, email, password) VALUES (?, ?, ?, ?, ?)")))
  {
    echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
  }

  /* Prepared statement, stage 2: bind parameters*/
  if (!$stmt->bind_param('sssss', $_first_name, $_last_name, $_student_id, $_email , $_password))
  {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }

  /* Prepared statement, stage 3: execute*/
  if (!$stmt->execute())
  {
    echo "<h3> Email Taken! </h3>";
  }
  else
  {
    echo "<h3> Signup Successful </h3>";
    session_start();
    $_SESSION['password'] = $_password;
    $_SESSION['email'] = $_email;
    $_SESSION['firstname'] = $_first_name;
    $_SESSION['lastname'] = $_last_name;
    $_SESSION['studentid'] =  $_student_id;
    header('Location: soar.html');
  }
}

function SaveStudentInfoToDB($_db, $_student_id, $_address1, $_address2, $_address3, $_city, $_state_code, $_zip, $_country, $_phone1, $_phone2)
{
  /* Prepared statement, stage 1: prepare query */
  if (!($stmt = $_db->prepare("INSERT INTO student_info(student_id, address1, address2, address3, city, state_code, zip, country, phone1, phone2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")))
  {
    echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
  }

  /* Prepared statement, stage 2: bind parameters*/
  if (!$stmt->bind_param('ssssssssss', $_student_id, $_address1, $_address2, $_address3, $_city, $_state_code, $_zip, $_country, $_phone1, $_phone2))
  {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }

  /* Prepared statement, stage 3: execute*/
  if (!$stmt->execute())
  {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }
}

function SaveStudentSummaryToDB($_db, $_student_id, $_summary_text)
{
  /* Prepared statement, stage 1: prepare query */
	if (!($stmt = $_db->prepare("INSERT INTO student_summary(student_id, summary_text) VALUES (?, ?)")))
	{
		echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
	}

	/* Prepared statement, stage 2: bind parameters*/
	if (!$stmt->bind_param('ss', $_student_id, $_summary_text))
	{
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	/* Prepared statement, stage 3: execute*/
	if (!$stmt->execute())
	{
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}
}

function SaveStudentAdditionalToDB($_db, $_student_id, $_additional_text)
{
  /* Prepared statement, stage 1: prepare query */
  if (!($stmt = $_db->prepare("INSERT INTO student_additional(student_id, additional_text) VALUES (?, ?)")))
  {
    echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
  }

  /* Prepared statement, stage 2: bind parameters*/
  if (!$stmt->bind_param('ss', $_student_id, $_additional_text))
  {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }

  /* Prepared statement, stage 3: execute*/
  if (!$stmt->execute())
  {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }
}

function SaveStudentEducationToDB($_db, $_student_id, $_school_name, $_degree_name, $_study_area, $_graduation_month, $_graduation_year)
{
  /* Prepared statement, stage 1: prepare query */
  if (!($stmt = $_db->prepare("INSERT INTO student_education(student_id, school_name, degree_name, study_area, graduation_month, graduation_year) VALUES (?, ?, ?, ?, ?, ?)")))
  {
    echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
  }

  /* Prepared statement, stage 2: bind parameters*/
  if (!$stmt->bind_param('ssssii', $_student_id, $_school_name, $_degree_name, $_study_area, $_graduation_month, $_graduation_year))
  {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }

  /* Prepared statement, stage 3: execute*/
  if (!$stmt->execute())
  {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }
}

function SaveStudentExperienceToDB($_db, $_student_id, $_job_position_name, $_company_name, $_start_date, $_end_date)
{
  /* Prepared statement, stage 1: prepare query */
  if (!($stmt = $_db->prepare("INSERT INTO student_experience(student_id, job_position_name, company_name, start_date, end_date) VALUES (?, ?, ?, ?, ?)")))
  {
    echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
  }

  /* Prepared statement, stage 2: bind parameters*/
  if (!$stmt->bind_param('sssss', $_student_id, $_job_position_name, $_company_name, $_start_date, $_end_date))
  {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }

  /* Prepared statement, stage 3: execute*/
  if (!$stmt->execute())
  {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }
}

function SaveStudentSkillsToDB($_db, $_student_id, $_skill_name, $_proficiency_name)
{
  /* Prepared statement, stage 1: prepare query */
  if (!($stmt = $_db->prepare("INSERT INTO WALL(student_id, skill_name, proficiency_name) VALUES (?, ?, ?)")))
  {
    echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
  }

  /* Prepared statement, stage 2: bind parameters*/
  if (!$stmt->bind_param('sss', $_student_id, $_skill_name, $_proficiency_name))
  {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }

  /* Prepared statement, stage 3: execute*/
  if (!$stmt->execute())
  {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }
}
/*
function SaveRefProficiencyToDB($_db, $_proficiency_name)
{
   Prepared statement, stage 1: prepare query 
	if (!($stmt = $_db->prepare("INSERT INTO ref_proficiency(proficiency_name) VALUES (?)")))
	{
		echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
	}

	 Prepared statement, stage 2: bind parameters
	if (!$stmt->bind_param('s', $_proficiency_name))
	{
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	 Prepared statement, stage 3: execute
	if (!$stmt->execute())
	{
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}
}
*/

function SaveRefSkillsToDB($_db, $_skill_name)
{
  /* Prepared statement, stage 1: prepare query */
	if (!($stmt = $_db->prepare("INSERT INTO ref_skills(skill_name) VALUES (?)")))
	{
		echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
	}

	/* Prepared statement, stage 2: bind parameters*/
	if (!$stmt->bind_param('s', $_skill_name))
	{
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	/* Prepared statement, stage 3: execute*/
	if (!$stmt->execute())
	{
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}
}

function SaveRefStudyAreaToDB($_db, $_study_area)
{
  /* Prepared statement, stage 1: prepare query */
  if (!($stmt = $_db->prepare("INSERT INTO ref_study_area(study_area) VALUES (?)")))
  {
    echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
  }

  /* Prepared statement, stage 2: bind parameters*/
  if (!$stmt->bind_param('s', $_study_area))
  {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }

  /* Prepared statement, stage 3: execute*/
  if (!$stmt->execute())
  {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }
}

function SaveRefJobPositionToDB($_db, $_position_name)
{
  /* Prepared statement, stage 1: prepare query */
  if (!($stmt = $_db->prepare("INSERT INTO ref_job_position(position_name) VALUES (?)")))
  {
    echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
  }

  /* Prepared statement, stage 2: bind parameters*/
  if (!$stmt->bind_param('s', $_position_name))
  {
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  }

  /* Prepared statement, stage 3: execute*/
  if (!$stmt->execute())
  {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  }
}

function SaveRefDegreeToDB($_db, $_degree_name)
{
  /* Prepared statement, stage 1: prepare query */
	if (!($stmt = $_db->prepare("INSERT INTO ref_degree(degree_name) VALUES (?)")))
	{
		echo "Prepare failed: (" . $_db->errno . ") " . $_db->error;
	}

	/* Prepared statement, stage 2: bind parameters*/
	if (!$stmt->bind_param('s', $_degree_name))
	{
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	/* Prepared statement, stage 3: execute*/
	if (!$stmt->execute())
	{
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}
}

?>
