(function() {
'use strict';

var supported = Boolean(
    document.links &&
    document.body.getAttribute &&
    document.body.appendChild &&
    document.getElementById &&
    document.createElement &&
    document.createTextNode &&
    document.compareDocumentPosition &&
    window.Node &&
    Node.DOCUMENT_POSITION_PRECEDING &&
    Node.DOCUMENT_POSITION_FOLLOWING
),

function install() {
  var links = document.links;
  for (var i = 0, l = links.length; i < l; i++) {
    var link = links[i];
    var href = link.getAttribute('href');
    if (!(href && href[0] === '#')) continue;
    if (link.className.match(/(^|\s)no-link-type($|\s)/)) continue;
    var text = '\u00A0↕';
    var title = 'Link to another chapter';
    var target = document.getElementById(href.substring(1));
    if (target) {
      var position = link.compareDocumentPosition(target);
      if (position & Node.DOCUMENT_POSITION_PRECEDING) {
        text = '\u00A0↑';
        title = 'see above';
      } else if (position & Node.DOCUMENT_POSITION_FOLLOWING) {
        text = '\u00A0↓ ';
        title = 'see below';
      }
    }
    var span = document.createElement('span');
    span.appendChild(
      document.createTextNode(text)
    );
    span.className = 'link-type';
    span.title = 'Link to another chapter';
    link.appendChild(span);
  }
}

if (supported) {
  install();
}

})();
