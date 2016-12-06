<?php
session_start();
// NOTE: session_start() must be at the top of the page
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="/prototype.js"></script>
	<script type="text/javascript" src="JavaScript/chatroomAutoUpdater.js"></script>
</head>
<body id="chatroom">
	<?php
	//echo "<span id=\"userID\" value=" . $_SESSION["id"] . "></span>";
	?>
	<h1>Novinophobia Chatroom</h1>
	<div id="chatter"></div>
	<div>
		<input id="im" type="textarea"/> <br />
		<button id="submit" type="button">Send IM!</button>
		<!--where we will report error messages-->
		<div id="status"></div>

</body>
</html>
