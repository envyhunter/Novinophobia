//global variable to refresh the page with new messages once per second
var timerID;

// Success! Will show messages in Chatroom
function ajaxCompleted(ajax) {
	var o = document.getElementById("chatter");
	o.textContent = ajax.responseText;
}

// Failure - your code is broken somehow
function ajaxFailed(ajax, exception) {
	var s = document.getElementById("status");
	s.value = ajax.status + " " + ajax.statusText;
}

//ajax request to show messages
function asyncDownloadComments() {
	new Ajax.Request(
		"fetchChat.php",
		{
			onSuccess: ajaxCompleted,
			onFailure: ajaxFailed,
			onException: ajaxFailed
		}
	);
}

//update the text area where submitted messages will be displayed
function updateChatBox(){
	//ajax request
	asyncDownloadComments();
}

window.onload = function() {
	//returns a timer ID
	timerID = setInterval(updateChatBox, 1000);
}

