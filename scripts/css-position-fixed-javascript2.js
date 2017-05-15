function handle_internal_link (e) {
    var hashposition, link_uri;
    var target = e.target;

    if (typeof(target.nodeType) == "undefined" ||
        typeof(target.nodeName) == "undefined") {
        return true;
    }
    if (target.nodeType == 3) {
        target = target.parentNode;
    }
    if (target.nodeName.toLowerCase() != "a" || target.href.length == 0 ||
        typeof(target.hash) == "undefined" || target.hash.length == 0 ||
        target.hash == "#") {
        return true;
    }

    link_uri = target.href;
    hashposition = link_uri.indexOf("#");
    if (hashposition > -1) {
        link_uri = link_uri.substring(0, hashposition);
    }
    if (link_uri == document_uri) {
        // Der Wert -60 muss an die Höhe des fest positionierten Elements angepasst werden.
        window.setTimeout('window.scrollBy(0, -60)', 100);
    }
}
function init_position_fixed () {
    if (location.hash)
        window.scrollBy(0, -60); // Hier ebenfalls.
    document_uri = location.href;
    var hashposition = document_uri.indexOf("#");
    if (hashposition > -1) {
        document_uri = document_uri.substring(0, hashposition);
    }
    document.addEventListener("click", handle_internal_link, false);
}
if (window.addEventListener && document.addEventListener)
    window.addEventListener("load", init_position_fixed, false);