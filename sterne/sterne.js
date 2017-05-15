/* ********************************************************************** */

function getInnerText (element) {
  if (typeof element.textContent == "string") {
		return element.textContent;
	} else if (typeof element.innerText == "string") {
		return element.innerText;
	}
}

/* ********************************************************************** */

function markiereAktuelleTourtermine () {
	var now = new Date();
	var year = now.getFullYear();
	var table = document.getElementById("termine" + year);
	while (table) {
		for (var rowIndex = 0, row; row = table.rows[rowIndex]; rowIndex++) {
			var dateElements = row.querySelectorAll("span.dtstart");
			if (dateElements.length == 0) {
				continue;
			}
			var dateElement = dateElements[0];
			var dateString = getInnerText(dateElement);

			if (dateString.length != 10) {
				continue;
			}
			var gigDate = new Date(
				Number(dateString.substr(6)),
				Number(dateString.substr(3, 2)) - 1,
				Number(dateString.substr(0, 2)),
				20, 0, 0
			);
			if ((gigDate - now) > 0) {
				addClass(row, "upcoming");
			}
		}
		year++;
		table = document.getElementById("termine" + year);
	}
}

/* ********************************************************************** */

window.onload = function () {
	if (!(document.getElementById && document.querySelectorAll &&
		document.body.classList)) {
		return;
	}
	markiereAktuelleTourtermine();
};
