//global variable to refresh the page with new messages once per second
var timerID;

// Success! A message was added to the database
function ajaxCompleted(ajax) {
	var o = document.getElementById("im");
	o.textContent = "Message Sent";
}

// Failure - your code is broken somehow
function ajaxFailed(ajax, exception) {
	var s = document.getElementById("status");
	s.value = ajax.status + " " + ajax.statusText;
}

//ajax request to add im to DB
function ajaxLookup(event) {
	// Input has changed so erase prior status
	clear("status");

	// the variables we want to post
	var userID = $('userid').value;
	var msg = $('im').value;

	// Only bother making a query if something is entered:
	if (userID && msg) {
		/*
		 * Set up and launch the Ajax request using the prototype.js helper
		 * class. The parameters field consists of stuff to POST.
		 */
		new Ajax.Request(
		"updateChatroom.php", {
			method: post,
			onSuccess : ajaxCompleted,
			onFailure : ajaxFailed,
			onException : ajaxFailed,
			// pass parameters
			parameters : {
				userid : userID,
				im : msg
			}
		});
	}
}

//input the IM into the database
function loadClick() {
	echo "loadclick is entered ";
	ajaxLookup;
}

window.onload = function() {
	//submitted IM
	echo "page loaded";
	$("submit").onclick = loadClick;
}

