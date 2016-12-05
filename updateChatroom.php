<?php 

# Before sending any other content, specify that the output will be JSON.
header('Content-Type: application/json');
require_once "DatabaseAdapter.php";
function give_up() {
	echo '{ "status":"failure" }';
	exit();
}

# If there is no query name, give up.
if (isset($_POST['id']) && isset($_POST['inputVar'])) {
	$base = new DatabaseAdaptor();
	// TODO
	$base->updateChatroom($_POST['id'], $_POST['inputVar']);
}
else
	give_up();

?>