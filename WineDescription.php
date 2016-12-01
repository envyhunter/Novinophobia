<!DOCTYPE html>
<html>

<!--Author: Emily Alexander and Sean Pearson-->

<?php
	#global variable
	$wine = "wine";
	$wine_name = "name";

	//include('functions.php');
	//update post info here, for generating a form
	if (isset($_GET["wine"])){
		$wine=$_GET["wine"];
	}
	if (isset($_GET["wine_name"])){
		$wine_name=$_GET["wine_name"];
	}

	#global variables
	$image = "images/".$wine.".png";
	$description = $wine//sqlquery
?>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Wine Description</title>
	<meta charset="utf-8" />
</head>
<body>
	
	<h1><?=$wine_name?></h1>
	
	<div class="bigbox">
		<div class="boxleft">
			<p><?=$description?><p>
		</div>
		
		<div class="boxright">
			<p><img src=<?=$image?> alt="wine bottle"><p>
		</div>
	</div>
</body>
</html>