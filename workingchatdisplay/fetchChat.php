<?php
# Before sending any other content, specify that the output will be JSON.
header('Content-Type: application/json');
require_once "ChatDatabase.php";
$DB = new ChatDatabase();

//****limit query to resonable length, sort by time, return that as json
echo $DB->showMessages();
?>