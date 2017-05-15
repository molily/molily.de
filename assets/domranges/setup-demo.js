new SelectionMenu({
	container : document.getElementById('selectionmenu-demo'),
	menuHTML : '<a id="selection-menu-google">Google-Suche</a><a id="selection-menu-bing">Bing-Suche</a>',
	handler : function (e) {
		var target = e.target || e.srcElement,
			id = target.id,
			selectedText = this.selectedText,
			query = encodeURI(selectedText.replace(/\s/g, '+')),
			searchURI;
		if (id == 'selection-menu-google') {
			searchURI = 'http://www.google.de/search?ie=utf-8&q=';
		} else if (id == 'selection-menu-bing') {
			searchURI = 'http://www.bing.com/search?q=';
		}
		location.href = searchURI + query;
	}
});

new CopyLink({
	container : document.getElementById('copylink-demo'),
	handler : function () {
		return '<br>Quelle: ' + location.href;
	}
});