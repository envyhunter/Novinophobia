function checkUsername(username) {
	new Ajax.Updater(
		{	
			success: "output",
			failure: "status"	
		},
		username,
		{
			method: "get",
			insertion: "top"
		}
	);
}

function loadClick() {
	asyncDownloadText(document.getElementById("username").innerHTML);
}

window.onload = function() {
	document.getElementById("username").onchange = loadClick;
}