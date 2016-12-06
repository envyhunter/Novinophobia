<?php

/*
 * This file is the page manager. It is what will load the 'home' page by default.
 * If a url of another page is loaded, which has a form, when that form is submitted,
 * the controller absorbs that form and can redirect back to here when this PHP code runs:
 *
 * header ( "Location: index.php" );
 *
 * This represents a Single Page Application (SPA) with two views
 * Authors: Rick Mercer and Hassanain Jamal
 */
if (isset ( $_GET ['mode'] )) {
	if ($_GET ['mode'] === 'register') {
		require_once ("Login/Register.php");
	}
	if ($_GET ['mode'] === 'profile') {
		require_once ("Profile/Profile.php");
	}
	if ($_GET ['mode'] === 'wineDiscription') {
		require_once ("WineDescriptions/WineDescription.php");
	}
	if ($_GET ['mode'] === 'wineSelector.php') {
		require_once ("MainPage/WineSelector.php");
	}
} else {
	require_once ("Login/Login.php");
}
?>