<!DOCTYPE html>
<html>
<head>
<title>Chatroom</title>
<script type="text/javascript" src="/prototype.js"></script>
<script type="text/javascript" src="JavaScript/chatroom_UPDATER.js"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body id="chatroom">
	<?php
	session_start();
	echo "<span id=\"userID\" value=" . $_SESSION["id"] . "></span>";
	?>
	<h1>Novinophobia Chatroom</h1>
	<!--for CSS formatting purposes-->
	<div id="chatbox"></div>
	<div>
		<!--form to send new IM-->
		<form action="Chatroom.php" method="post">
			<input id="im" type="textarea" size="500"
				value="Type something you'd like to share with the world." /> <br />
			<button id="submit" type="button">Click Me!</button>
		</form>
		<!--where we will report error messages-->
		<div id="errors"></div>

</body>
</html>