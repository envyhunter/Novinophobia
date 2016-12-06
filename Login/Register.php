<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="/prototype.js"></script>
<script type="text/javascript" src="../JavaScript/username_Taken.js"></script>
</head>
<body>
	<div id="body">
		<div id="title">
			<p>Novinophobia</p>
		</div>
		<div id="Register_Form">

			<form action="Register_Request.php" method="post">
				<p>username</p>
				<input type="text" name="username" id="username" /><span id="errors"></span><span id="status"></span>
				<p>password</p>
				<input type="text" name="passwd" />
				<p>First Name</p>
				<input type="text" name="FirstName" />
				<p>Last Name</p>
				<input type="text" name="LastName" />
				 <input type="submit" value="Register" />
			</form>

		</div>







	</div>
</body>
</html>