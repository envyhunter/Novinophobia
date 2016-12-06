<?php
session_start();
// NOTE: session_start() must be at the top of the page
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="myStyle.css">
	<script type="text/javascript" src="/prototype.js"></script>
	<script type="text/javascript" src="JavaScript/chatroomAutoUpdater.js"></script>
</head>
<body id="chatroom">
	<h1>Novinophobia Chatroom</h1>
	<div id="chatter"></div>
	<div>
		<input id="im" type="textarea"/> <br />
		<input id="userid" type="hidden" value="1"/> <br />
		<button id="submit" type="button">Send IM!</button>
	</div>
	<!--where we will report error messages-->
	<div id="status"></div>
</body>
</html>
