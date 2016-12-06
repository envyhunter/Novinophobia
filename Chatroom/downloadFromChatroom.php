<?php 

# Before sending any other content, specify that the output will be JSON.
header('Content-Type: application/json');
require_once "../Database/DatabaseAdapter.php";


# If there is no query name, give up.
	$base = new DatabaseAdaptor();
	// TODO
	$base->downloadChatroom();


?>