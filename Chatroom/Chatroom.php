<!DOCTYPE html>
<html>
<head>
<title>Chatroom</title>
<script type="text/javascript" src="/prototype.js"></script>
<script type="text/javascript" src="../JavaScript/ChatroomMonitor.js"></script>
<link rel="stylesheet" type="text/css" href="../CSS/mystyle.css">
</head>
<body id="chatroom">
	<?php
	session_start ();
	?>
	
	<h1>Novinophobia Chatroom</h1>
	<!--for CSS formatting purposes-->
	<div id="chatbox"></div>
	<div>
		<input id="userID" type="hidden" value=<?=$_SESSION ["id"]?> />
		 <input id="im"	type="textarea" size="500" value="" /> <br />
		<button id="submit" type="button">Click Me!</button>
		<!--where we will report error messages-->
		<div id="errors"></div>
	</div>
</body>
</html>