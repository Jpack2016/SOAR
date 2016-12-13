<?php
session_start();

// Include classes
include_once('tbs_class.php'); // Load the TinyButStrong template engine
include_once('tbs_plugin_opentbs.php'); // Load the OpenTBS plugin

// prevent from a PHP configuration problem when using mktime() and date()
if (version_compare(PHP_VERSION,'5.1.0')>=0) {
	if (ini_get('date.timezone')=='') {
		date_default_timezone_set('UTC');
	}
}

// Initialize the TBS instance
$TBS = new clsTinyButStrong; // new instance of TBS
$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load the OpenTBS plugin

// ------------------------------
// Prepare data
// ------------------------------

// Retrieve the user name to display
//$yourname = (isset($_POST['yourname'])) ? $_POST['yourname'] : '';
//$yourname = trim(''.$yourname);
//if ($yourname=='') $yourname = "(no name)";

$first_name = $_SESSION['firstname'];
$last_name = $_SESSION['lastname'];
$email =  $_SESSION['email'];
$student_id =  $_SESSION['studentid'];

$address1 = $_SESSION['address1'];
$address2 = $_SESSION['address2'];
$address3 = $_SESSION['address3'];
$city = $_SESSION['city'];
$state_code = $_SESSION['state_code'];
$zip = $_SESSION['zip'];
$country = $_SESSION['country'];
$phone1 = $_SESSION['phone1'];
$phone2 = $_SESSION['phone2'];
$summary_text = $_SESSION['summary_text'];
$additional_text = $_SESSION['additional_text'];

$school_name1 = $_SESSION['school_name1'];
$degree_name1 = $_SESSION['degree_name1'];
$study_area1 = $_SESSION['study_area1'];
$graduation_month1 = $_SESSION['graduation_month1'];
$graduation_year1 = $_SESSION['graduation_year1'];
$job_position_name1 = $_SESSION['job_position_name1'];
$company_name1 = $_SESSION['company_name1'];
$start_date1 = $_SESSION['start_date1'];
$end_date1 = $_SESSION['end_date1'];
$skill_name1 = $_SESSION['skill_name1'];
$proficiency_name1 = $_SESSION['proficiency_name1'];

$school_name2 = $_SESSION['school_name2'];
$degree_name2 = $_SESSION['degree_name2'];
$study_area2 = $_SESSION['study_area2'];
$graduation_month2 = $_SESSION['graduation_month2'];
$graduation_year2 = $_SESSION['graduation_year2'];
$job_position_name2 = $_SESSION['job_position_name2'];
$company_name2 = $_SESSION['company_name2'];
$start_date2 = $_SESSION['start_date2'];
$end_date2 = $_SESSION['end_date2'];
$skill_name2 = $_SESSION['skill_name2'];
$proficiency_name2 = $_SESSION['proficiency_name2'];

$school_name3 = $_SESSION['school_name3'];
$degree_name3 = $_SESSION['degree_name3'];
$study_area3 = $_SESSION['study_area3'];
$graduation_month3 = $_SESSION['graduation_month3'];
$graduation_year3 = $_SESSION['graduation_year3'];
$job_position_name3 = $_SESSION['job_position_name3'];
$company_name3 = $_SESSION['company_name3'];
$start_date3 = $_SESSION['start_date3'];
$end_date3 = $_SESSION['end_date3'];
$skill_name3 = $_SESSION['skill_name3'];
$proficiency_name3 = $_SESSION['proficiency_name3'];

// A recordset for merging tables
/*
$data = array();
$data['education'] = array();
$data['education'][] = array('inst'=>'FAU','major'=>'CE','start_date'=>'12/01/14','end_date'=>'06/01/17');
$data['skills'] = array();
$data['skills'][] = array('skill_name'=>'C++','prof_level'=>'Intermediate');
$data['skills'][] = array('skill_name'=>'PHP','prof_level'=>'Expert');
$data['skills'][] = array('skill_name'=>'Microcontrollers/MSP430','prof_level'=>'Intermediate');
$data['employment'] = array();
$data['employment'][] = array('location'=>'McD','position'=>'flipper','start_date'=>'10/05/12','end_date'=>'10/08/12');
*/


// -----------------
// Load the template
// -----------------

$template = 'resume_template.odt';

$TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8); // Also merge some [onload] automatic fields (depends of the type of document).

// ----------------------
// Debug mode of the demo
// ----------------------
if (isset($_POST['debug']) && ($_POST['debug']=='current')) $TBS->Plugin(OPENTBS_DEBUG_XML_CURRENT, true); // Display the intented XML of the current sub-file, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='info'))    $TBS->Plugin(OPENTBS_DEBUG_INFO, true); // Display information about the document, and exit.
if (isset($_POST['debug']) && ($_POST['debug']=='show'))    $TBS->Plugin(OPENTBS_DEBUG_XML_SHOW); // Tells TBS to display information when the document is merged. No exit.

// --------------------------------------------
// Merging and other operations on the template
// --------------------------------------------

// Merge data in the body of the document
$TBS->MergeBlock('a', $data);

// -----------------
// Output the result
// -----------------

// Define the name of the output file
//$save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
//$output_file_name = str_replace('.', '_'.date('Y-m-d').$save_as.'.', $template);
$out_path = "resume/";
$output_file_name = $out_path.$student_id.".odt";

$save_file_name = $student_id."-".date('Y-m-d').".odt";
$TBS->Show(OPENTBS_FILE, $output_file_name);
$TBS->Show(OPENTBS_DOWNLOAD, $save_file_name);

//if ($save_as==='') {
	// Output the result as a downloadable file (only streaming, no data saved in the server)
	//$TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); // Also merges all [onshow] automatic fields.
	// Be sure that no more output is done, otherwise the download file is corrupted with extra data.
	//exit();
//} else {
	// Output the result as a file on the server.
	//$TBS->Show(OPENTBS_FILE, $output_file_name); // Also merges all [onshow] automatic fields.
	// The script can continue.
	exit("File [$output_file_name] has been created.");
//}
