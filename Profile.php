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
	
	$preference_info = $db->query("SELECT * FROM userpreference WHERE userId=20.");
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
		"intensity" => $intensity,
		"spicy" => $spicy,
		"chocolate" => $chocolate,
		"acidity" => $acidity,
		"light_bodied" => $light_bodied,
		"medium_bodied" => $medium_bodied,
		"full_bodied" => $full_bodied,
		"dry" => $dry,
		"sweet" => $sweet,
		"elegant" => $elegant,
		"earthy" => $earthy
	);
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
		<p>Based on your user input, you seem to like your wines to be/have:</p>
		<ul>
			<?php
				$keys = array_keys($arr);
				foreach($keys as $index){
					?><li><?=$index?></li><?php
				}
			?>
		</ul>
	</div>
	<?php
		/*while ($fruit_name = current($array)) {
		if ($fruit_name == 'apple') {
			echo key($array).'<br />';
		}
		next($array);
}*/	
	?>
</body>
</html>