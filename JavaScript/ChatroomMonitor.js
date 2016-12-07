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
function ajaxExit(ajax) {
	$('chatbox').scrollTop = $('chatbox').scrollHeight;
	$('chatbox').scrollTop = $('chatbox').scrollHeight-10;
}
function ajaxCompleted(ajax) {
	var resp = JSON.parse(ajax.responseText);
	//console.log(resp);
	var result = "";
	for (var i = 0; i < resp.length; i++) {
		if(resp[i].userId == $('userID').value){
			result += "<div id=\"currentUser\">";
		} else {
			result += "<div id=\"otherUser\">";
		}
		result += "<div id=\"username\">" + resp[i].username + "</div>";
		result += "<div id=\"description\">" + resp[i].description + "</div>";
		result += "</div>";
	}
	
	var stat = "";
	// TODO
	// *************************************************************************************
	$('chatbox').innerHTML = result;
	
	
}

// Callback function if AJAX fails or results are unreadable.
// If it did not work, show why.
function ajaxFailed(ajax) {
	$('errors').textContent = ajax.status + " " + ajax.statusText;
}

function download(event) {
	// Input has changed so erase prior status
	clear("status");

	// read username
	console.log("download");

	// Only bother making a query if something is entered:
		/*
		 * Set up and launch the Ajax request using the prototype.js helper
		 * class. The parameters field consists of stuff to POST.
		 */
		new Ajax.Request(
		// TODO
		"../Chatroom/downloadFromChatroom.php", {
			onSuccess : ajaxCompleted,
			onFailure : ajaxFailed,
			onException : ajaxFailed,
			// TODO
			parameters : {
				 
			}
		});
}

function upload(event) {
	// Input has changed so erase prior status
	clear("status");
	console.log("upload");
	// read username
	var userID = $('userID').value;
	var input = $('im').value;
	console.log($('userID').value);
	console.log($('im').value);
	$('im').value = "";
	console.log($('im').value);

	// Only bother making a query if something is entered:
	if (userID && input) {
		/*
		 * Set up and launch the Ajax request using the prototype.js helper
		 * class. The parameters field consists of stuff to POST.
		 */
		new Ajax.Request(
		// TODO
		"../Chatroom/uploadToChatroom.php", {
			onSuccess : ajaxExit,
			onFailure : ajaxFailed,
			onException : ajaxExit,
			// TODO
			parameters : {
				id : userID,
				inputVar : input 
			}
		});
	}
}

// Set up all the event handlers
window.onload = function() {
	console.log("loaded Monitor");
	setInterval(download, 500);
	$("submit").onclick = upload;
}
