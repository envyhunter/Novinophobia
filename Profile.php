<!DOCTYPE html>
<html>
<!--Author: Emily Alexander and Sean Pearson-->

<?php
	//set up reference to database before doing anything else
	$database = 'mysql:dbname=Novinophobia;host=127.0.0.1';
	$user = 'root';
	$password = '';	
	//try to access database
	try{
		$db = new PDO ($database, $user, $password);
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} catch (PDOException $e){
		echo('Error establishing connection!');
		exit();
	}
	
	// selecting a user using their id in order to get preferences
	// created a random record with userId 20 with various integer values for testing purposes
	$preference_info = $db->query("SELECT * FROM userpreference WHERE userId=20.");
	
	//pulling preferences from given row
	foreach ($preference_info as $user){
		$intensity = $user["intensity"];
		$spicy = $user["spicy"];
		$chocolate = $user["chocolate"];
		$acidity = $user["acidity"];
		$light_bodied = $user["light_bodied"];
		$medium_bodied = $user["medium_bodied"];
		$full_bodied = $user["full_bodied"];
		$dry = $user["dry"];
		$sweet = $user["sweet"];
		$elegant = $user["elegant"];
		$earthy = $user["earthy"];
	}
	
	$arr = array(
		"Intensity" => $intensity,
		"Spicy" => $spicy,
		"Chocolate" => $chocolate,
		"Acidic" => $acidity,
		"Light Bodied" => $light_bodied,
		"Medium Bodied" => $medium_bodied,
		"Full Bodied" => $full_bodied,
		"Dry" => $dry,
		"Sweet" => $sweet,
		"Elegant" => $elegant,
		"Earthy" => $earthy
	);
	//sorts without losing index values
	asort($arr);
	
?>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Wine Profile</title>
	<meta charset="utf-8" />
</head>
<body>
	<h1 id="header">Profile Page</h1>
	
	<div class>
		<p>Based on your user input, you seem to like your wines to be:</p>
		<ul>
			<?php
				//list keys instead of integer values for user
				$keys = array_keys($arr);
				foreach($keys as $index){
					?><li><?=$index?></li><?php
				}
			?>
		</ul>
	</div>
</body>
</html>