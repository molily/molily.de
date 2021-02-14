(function () {
  'use strict';

  function installIframeButtons() {
    var loadIframeButtons = document.getElementsByClassName('load-iframe');
    for (var i = 0, l = loadIframeButtons.length; i < l; i++) {
      var button = loadIframeButtons[i];
      button.onclick = function (event) {
        var button = event.target;
        var scriptTemplate = button.parentNode.nextElementSibling;
        var iframeHTML = scriptTemplate.textContent;
        var container = document.createElement('div');
        container.innerHTML = iframeHTML;
        scriptTemplate.parentNode.replaceChild(container, scriptTemplate);
        button.parentNode.removeChild(button);
      };
    }
  }

  function installCollapseTOC() {
    var tocTree = document.getElementById('toc-tree');
    var chapterLinks = tocTree.querySelectorAll(':scope > li > a');
    for (var i = 0, l = chapterLinks.length; i < l; i++) {
      var chapterLink = chapterLinks[i];
      if (chapterLink.pathname !== location.pathname) {
        var ol = chapterLink.nextElementSibling;
        if (ol) {
          ol.className += ' collapsed';
        }
      }
    }
  }

  function install() {
    if (
      document.getElementsByClassName &&
      'nextElementSibling' in document.body &&
      document.createElement &&
      document.body.replaceChild &&
      document.body.removeChild
    ) {
      installIframeButtons();
    }
    if (
      document.getElementById &&
      document.body.querySelectorAll &&
      'nextElementSibling' in document.body
    ) {
      installCollapseTOC();
    }
  }

  install();
})();
