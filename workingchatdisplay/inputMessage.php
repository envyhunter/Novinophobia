<?php
# Before sending any other content, specify that the output will be JSON.
header('Content-Type: application/json');
require_once "ChatDatabase.php";

function give_up() {
	echo '{ "status":"failure" }';
	exit();
}

if (isset($_POST['userid']) && isset($_POST['im'])) {
	$DB = new ChatDatabase();
	// add message to database
	$DB->addMessage(($_POST['userid']),($_POST['im']));
}
# If there is no query name, give up.
else
	give_up();
?>