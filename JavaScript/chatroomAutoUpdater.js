function asyncDownloadData(url) {
	new Ajax.PeriodicalUpdater(
		{
			success: "output",
			failure: "status"	
		},
		url,
		{
			method: "get",
			insertion: Element.update,
			frequency: 1
		}
	);
}

function loadClick() {
	asyncDownloadData("troilus.txt");
}

window.onload = function() {
	window.onload = loadClick;
}
