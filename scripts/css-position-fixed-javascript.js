function addEvent (obj, event, func) {
    if (typeof(obj["on" + event]) == "function") {
        var old_func = obj["on" + event];
        obj["on" + event] = function (e) {
            if (!e)
                e = window.event;
            var return1, return2;
            return1 = old_func(e);
            return2 = func(e);
            if (return1 === false || return2 === false)
                return false;
        };
    } else {
        obj["on" + event] = func;
    }
}
function link_scrollup () {
    window.setTimeout('window.scrollBy(0, -60)', 10); // Der Wert -60 muss an die Höhe des fest positionierten Elements angepasst werden.
}
function init_position_fixed () {
    var i,  hyperlinks, linkcount,  link_uri, document_uri,  hash_position,  pattern;
    if (!window.scrollBy)
        return true;
    if (location.hash)
        window.scrollBy(0, -60); // Hier ebenfalls.
    hyperlinks = document.links;
    linkcount = hyperlinks.length;
    document_uri = location.href;
    hash_position = document_uri.indexOf("#");
    if (hash_position > -1) {
        document_uri = document_uri.substring(0, hash_position);
    }
    pattern = new RegExp("file:///");
    document_uri = document_uri.replace(pattern, "file://localhost/");
    for (i = 0; i < linkcount; i++) {
        if (!hyperlinks[i].hash || hyperlinks[i].hash == "#")
            continue;
        link_uri = hyperlinks[i].href;
        hash_position = link_uri.indexOf("#");
        if (hash_position > -1) {
            link_uri = link_uri.substring(0, hash_position);
        }
        if (link_uri.indexOf("file://") == 0) {
            link_uri = link_uri.replace(pattern, "file://localhost/");
        }
        if (link_uri == document_uri) {
            addEvent(hyperlinks[i], "click", link_scrollup);
        }
    }
}
function cancel_event (e) {
	return false;
}
function init_cancel () {
	addEvent(document.links[0], "click", cancel_event);
}
addEvent(window, "load", init_cancel);
addEvent(window, "load", init_position_fixed);
