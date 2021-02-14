(function () {
  'use strict';

  function installIframeButtons() {
    var loadIframeButtons = document.querySelectorAll('.load-iframe');
    Array.from(loadIframeButtons).forEach(function (button) {
      button.addEventListener('click', function (event) {
        var button = event.target;
        var scriptTemplate = button.parentNode.nextElementSibling;
        var iframeHTML = scriptTemplate.textContent;
        var container = document.createElement('div');
        container.innerHTML = iframeHTML;
        scriptTemplate.replaceWith(container);
        button.remove();
      });
    });
  }

  function installCollapseTOC() {
    var tocTree = document.getElementById('toc-tree');
    var chapterLinks = tocTree.querySelectorAll(':scope > li > a');
    Array.from(chapterLinks).forEach(function (chapterLink) {
      if (chapterLink.pathname !== location.pathname) {
        var ol = chapterLink.nextElementSibling;
        if (ol) {
          ol.classList.add('collapsed');
        }
      }
    });
  }

  function install() {
    if (
      document.createElement &&
      document.querySelectorAll &&
      document.addEventListener &&
      'nextElementSibling' in document.body &&
      document.body.replaceWith &&
      document.body.remove &&
      Array.from &&
      Array.prototype.forEach
    ) {
      installIframeButtons();
    } else if (
      document.createElement &&
      document.createTextNode &&
      document.head
    ) {
      var style = document.createElement('style');
      style.appendChild(document.createTextNode('.load-iframe { display: none }'));
      document.head.appendChild(style);
    }
    if (
      document.getElementById &&
      document.body.querySelectorAll &&
      document.body.classList &&
      document.body.classList.add &&
      'nextElementSibling' in document.body &&
      Array.from &&
      Array.prototype.forEach
    ) {
      installCollapseTOC();
    }
  }

  install();
})();
