<?php
require_once "DatabaseAdapter.php";
if (isset ( $_POST ["username"] ) && isset ( $_POST ["passwd"] )) {
	$user = $_POST ["username"];
	$pwd = $_POST ["passwd"];
	$username = mysql_real_escape_string ( $user );
	$myDatabaseFunctions = new DatabaseAdaptor ();
	$array = $myDatabaseFunctions->loginUser ( $username );
	print_r($array);
	echo "<br />";
	foreach ( $array as $record ) {
		echo "got milk <br />" . $record['password'];
		$hash_compare = $record['password'];
	}
	echo "<br /> hashed pw = $pwd, compare = $hash_compare \n";
	
	$password_Results = password_verify ( $pwd, $hash_compare );
	if ($password_Results) {
		header ( 'Location:WineSelector.php' );
	} else {
		echo "failed";
	}
} else {
	echo "error";
}
?>