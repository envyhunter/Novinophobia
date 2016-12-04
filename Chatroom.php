<!DOCTYPE html>
<html>
<?php
require_once "DatabaseAdapter.php";
//header('Content-Type: application/json');
if (isset($_POST["im"])) {
	echo "we got the informatoin";
	$userid = $_POST["userid"];
	$newmsg = $_POST["im"];
	$newmsg = mysql_real_escape_string($newmsg);

	//it's not getting into the database, some error is happening here
	$myDatabaseFunctions = new DatabaseAdaptor();
	$myDatabaseFunctions->addComment($username, $newmsg);
	echo $newmsg;
	
	//could add message id to db if prefer that, instead of pulling records by actual quote
	$myDatabaseFunctions->echoMatch($newmsg);
}
?>
<head>
	<title>Chatroom</title>
	<script type="text/javascript" src="../../prototype.js"></script>
	<script type="text/javascript" src=".js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body id="chatroom">
	<h1>Novinophobia Chatroom</h1>
	<!--for CSS formatting purposes-->
	<div id="chatbox"></div>
	<div>
		<!--form to send new IM-->
		<form action="Chatroom.php" method="post">
			<input id="im" type="textarea" size="500" value="Type something you'd like to share with the world."/><br>
			<input type="submit" value="Add Comment"/><br>
			<input type="hidden" id="userid" value="1">
		</form>
	<!--where we will report error messages-->
	<div id="errors"></div>
</body>
</html>