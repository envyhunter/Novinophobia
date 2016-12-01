<?php 

# Before sending any other content, specify that the output will be JSON.
header('Content-Type: application/json');
require_once "DatabaseAdapter.php";
function give_up() {
	echo '{ "status":"failure" }';
	exit();
}

# If there is no query name, give up.
if (isset($_POST['name'])) {
	$base = new DatabaseAdaptor();
	// TODO
	$base->echoMatch($_POST['name']);
}
else
	give_up();

?>