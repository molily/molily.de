(function () {
	var endTime = new Date;
	var el = document.getElementById('element');
	messages.push('a.js executed ' + ((endTime - startTime) / 1000) + 's after start, DOM access: ' + (el ? 'yes' : 'no'));
})();