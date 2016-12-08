<?php
class DBController {
	private $host = "localhost";
	private $user = "fsoares2014";
	private $password = "YD493oOEd3";
	private $database = "fsoares2014";

	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}

	function __destruct() {
		mysql_close();
	}

	function connectDB() {
		$conn = mysql_connect($this->host,$this->user,$this->password);
		return $conn;
	}

	function selectDB($conn) {
		mysql_select_db($this->database,$conn);
	}

	function getUserByOAuthId($oauth_user_id) {
		$query = "SELECT * FROM users WHERE oauth_uid = '" . $oauth_user_id . "'";
		$result = mysql_query($query);
		if(!empty($result)) {
			$existing_member = mysql_fetch_assoc($result);
			return $existing_member;
		}
	}

	function insertOAuthUser($userData) {
		$query = "INSERT INTO users (fname, email, oauth_uid) VALUES ('" . $userData->name . "','" . $userData->email . "','" . $userData->id ."')";
		$result = mysql_query($query);
	}
}
?>
