<?php
require_once "DatabaseAdapter.php";
if (isset ( $_POST ["username"] ) && isset ( $_POST ["passwd"] ) && isset ( $_POST ["FirstName"] ) && isset ( $_POST ["LastName"] )) {
	$user = $_POST ["username"];
	$pwd = $_POST ["passwd"];
	$firstName = $_POST ["FirstName"];
	$lastName = $_POST ["LastName"];
	
	$username = mysql_real_escape_string ( $user );
	$hashed_pwd = password_hash ( $pwd, PASSWORD_BCRYPT );
	
	$firstName = mysql_real_escape_string ( $firstName );
	$lastName = mysql_real_escape_string ( $lastName );
	
	$myDatabaseFunctions = new DatabaseAdaptor ();
	$array = $myDatabaseFunctions->addUser ( $username, $hashed_pwd, $firstName, $lastName );
	foreach ( $array as $record ) {
		$myDatabaseFunctions->addUserPreferences($record['id']);
	}
	header ( 'Location:index.php' );
} else {
	echo "error";
}
?>