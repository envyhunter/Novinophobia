<?php
require_once "DatabaseAdapter.php";
if (isset ( $_POST ["username"] ) && isset ( $_POST ["passwd"] )) {
	$user = $_POST ["username"];
	$pwd = $_POST ["passwd"];
	
	$username = mysql_real_escape_string ( $user );
	$hashed_pwd = password_hash ( $pwd, PASSWORD_BCRYPT );
	
	$myDatabaseFunctions = new DatabaseAdaptor ();
	$array = $myDatabaseFunctions->loginUser ( $username );
	foreach ( $array as $record ) {
		$hash_compare = $myDatabaseFunctions->addUserPreferences($record['password']);
	}
	$password_Results = password_verify ( $hashed_pwd, $hash_compare );
	if ($password_Results) {
		//header ( 'Location:WineSelector.php' );
	} else {
		//header ( 'Location:WineDescription.php' );
	}
} else {
	echo "error";
}
?>