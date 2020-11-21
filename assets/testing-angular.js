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

  function installTocTree() {
    if (!document.createDocumentFragment) return;

    /** @type {HTMLOListElement} */
    var tocTree = document.getElementById('toc-tree');
    /** @type {HTMLHeadingElement[]} */
    var headings = document.querySelectorAll('h2, h3, h4, h5, h6');

    var fragment = document.createDocumentFragment();

    /** @type {number | undefined} */
    var lastLevel;
    /** @type {HTMLOListElement | undefined} */
    var lastList = tocTree;
    /** @type {HTMLLIElement | undefined} */
    var lastListItem;

    arrayFrom(headings)
      .filter(function (heading) {
        return heading.id !== 'toc-heading';
      })
      .forEach(function (heading) {
        var tag = heading.tagName.toLowerCase();
        var level = parseInt(tag[1], 10);

        if (lastLevel !== undefined) {
          if (level < lastLevel) {
            // Go up to find the right ol for the level
            var levelDifference = lastLevel - level;
            for (var i = 0; i < levelDifference; i++) {
              lastList = lastList.parentNode.parentNode;
            }
          } else if (level > lastLevel) {
            // Go down, create a nested ol
            var ol = document.createElement('ol');
            lastListItem.appendChild(ol);
            lastList = ol;
          }
        }

        var li = document.createElement('li');
        var a = document.createElement('a');
        a.href = '#' + heading.id;
        a.textContent = heading.textContent;
        li.appendChild(a);
        lastList.appendChild(li);

        lastLevel = level;
        lastListItem = li;
      });
    tocTree.appendChild(fragment);
  }

  function installIframeButtons() {
    if (!document.body.replaceWith) return;

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
      document.getElementById &&
      document.querySelectorAll &&
      document.addEventListener &&
      Array.prototype.filter &&
      Array.prototype.forEach
    ) {
      installTocTree();
      installIframeButtons();
    }
  }

  install();
})();
