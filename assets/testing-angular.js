(function () {
  'use strict';

  var arrayFrom =
    Array.from ||
    function (list) {
      var array = [];
      for (var i = 0, l = list.length; i < l; i++) {
        array[i] = list[i];
      }
      return array;
    };

  function installIframeButtons() {
    var loadIframeButtons = document.querySelectorAll('.load-iframe');
    arrayFrom(loadIframeButtons).forEach(function (button) {
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

  function install() {
    if (
      document.createElement &&
      document.querySelectorAll &&
      document.addEventListener &&
      document.body.replaceWith &&
      Array.prototype.forEach
    ) {
      installIframeButtons();
    }
  }

  install();
})();
