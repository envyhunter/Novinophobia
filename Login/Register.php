<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/myStyle.css">
<script type="text/javascript" src="/prototype.js"></script>
<script type="text/javascript" src="../JavaScript/username_Taken.js"></script>
</head>
<body>
	<div id="body">
		<div class="title">
			<p>Registration Form</p>
		</div>
		<div id="Register_Form">
			<form action="Register_Request.php" method="post">
				<p>Username</p>
				<input type="text" name="username" id="username" /><span id="errors"></span><span id="status"></span>
				<p>Password</p>
				<input type="text" name="passwd" />
				<p>First Name</p>
				<input type="text" name="FirstName" />
				<p>Last Name</p>
				<input type="text" name="LastName" />
				<p><input type="submit" value="Register" /></p>
			</form>
		</div>
	</div>
	<div class="background"></div>
</body>
</html>