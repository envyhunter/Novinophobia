<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
session_start();
$temp="";
if(isset($_SESSION["id"])){
	$temp = $_SESSION["id"];
} else {
	echo "error";
}
echo "$temp";
?>

	<iframe src="../Chatroom/Chatroom.php" id="frameWork">
		<!--    Will be loading different html pages into here  -->
	</iframe>
</body>

</html>