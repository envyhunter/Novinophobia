<?php
require_once "../Database/DatabaseAdapter.php";
if (isset ( $_POST ["username"] ) && isset ( $_POST ["passwd"] )) {
	$user = $_POST ["username"];
	$pwd = $_POST ["passwd"];
	$username = mysql_real_escape_string ( $user );
	$myDatabaseFunctions = new DatabaseAdaptor ();
	$array = $myDatabaseFunctions->loginUser ( $username );
	foreach ( $array as $record ) {
		$hash_compare = $record['password'];
	}
	//echo "<br /> hashed pw = $pwd, compare = $hash_compare \n";
	
	$password_Results = password_verify ( $pwd, $hash_compare );
	if ($password_Results) {
		session_start();
		$array = $myDatabaseFunctions->getUserID($username);
		foreach ( $array as $record ) {
			$_SESSION["id"] = $record['id'];
		}
		header ( 'Location:../MainPage/WineSelector.php' );
	} else {
		header ( 'Location:../index.php' );
	}
} else {
	echo "error";
}
?>