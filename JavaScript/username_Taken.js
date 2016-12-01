"use strict";

// Remove all DOM-tree child elements from the parent (by id string).
function clear(parentId) {
	var parent = $(parentId);
	if (parent)
		for (var c = parent.firstChild; c; c = parent.firstChild)
			parent.removeChild(c);
}

// Callback function for successful reply.
// (Merge AJAX response into current page.)
function ajaxCompleted(ajax) {
	var resp = JSON.parse(ajax.responseText);
	console.log(ajax.responseText);
	console.log(resp);
	var stat = "";
	// TODO
	// *************************************************************************************
	if (resp.username) {
		stat = "username taken";
	} else {
		stat = "username avaiable";
	}
	$("status").textContent = stat;
}

// Callback function if AJAX fails or results are unreadable.
// If it did not work, show why.
function ajaxFailed(ajax) {
	$('errors').textContent = ajax.status + " " + ajax.statusText;
}

function ajaxLookup(event) {
	// Input has changed so erase prior status
	clear("status");

	// read username
	var iname = $("username").value;

	// Only bother making a query if something is entered:
	if (iname) {
		/*
		 * Set up and launch the Ajax request using the prototype.js helper
		 * class. The parameters field consists of stuff to POST.
		 */
		new Ajax.Request(
		// TODO
		"usernameCheck.php", {
			onSuccess : ajaxCompleted,
			onFailure : ajaxFailed,
			onException : ajaxFailed,
			// TODO
			parameters : {
				name : iname
			}
		});
	}
}

// Set up all the event handlers
window.onload = function() {
	$("username").onchange = ajaxLookup;
}
