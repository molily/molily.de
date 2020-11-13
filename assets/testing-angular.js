(function () {
  'use strict';

  var TOC_HEADING_ID = 'toc-heading';

  var currentTocLink;
  var headings;
  var tocTree;
  var intersectionObserver;

  var arrayFrom =
    Array.from ||
    function (list) {
      var array = [];
      for (var i = 0, l = list.length; i < l; i++) {
        array[i] = list[i];
      }
      return array;
    };

  function headingIntersect(entries) {
    if (!matchMedia('screen and (min-width: 55rem)').matches) {
      return;
    }
    var intersectingEntries = entries.filter(function (candidate) {
      return candidate.isIntersecting;
    });
    var relevantIntersectingEntries = intersectingEntries.filter(function (
      candidate
    ) {
      return candidate.target.id !== TOC_HEADING_ID;
    });
    var firstIntersectingEntry = relevantIntersectingEntries[0];
    var firstEntry = entries[0];
    var intersectingHeading;
    if (
      firstIntersectingEntry &&
      firstIntersectingEntry.target !== intersectingHeading
    ) {
      intersectingHeading = firstIntersectingEntry.target;
    } else if (
      firstEntry.boundingClientRect &&
      firstEntry.boundingClientRect.y > 0
    ) {
      /* Scrolling upwards: Focus previous heading */
      var index = arrayFrom(headings).findIndex(function (candidate) {
        return candidate === firstEntry.target;
      });
      if (index > 0) {
        intersectingHeading = headings[index - 1];
      }
    }
    if (intersectingHeading) {
      if (currentTocLink) {
        currentTocLink.classList.remove('active');
      }
      var id = intersectingHeading.id;
      var link = tocTree.querySelector('[href="#' + id + '"]');
      if (link) {
        link.classList.add('active');
        link.scrollIntoView({ block: 'nearest' });
        currentTocLink = link;
      }
    }
  }

  function installTocTree() {
    if (!document.createDocumentFragment) return;

    var fragment = document.createDocumentFragment();

    arrayFrom(headings)
      .filter(function (heading) {
        return heading.id !== TOC_HEADING_ID;
      })
      .forEach(function (heading) {
        var li = document.createElement('li');
        var a = document.createElement('a');
        a.href = '#' + heading.id;
        var tag = heading.tagName.toLowerCase();
        var level = parseInt(tag[1], 10);
        a.textContent = heading.textContent;
        li.className = 'toc-heading-level-' + level;
        li.appendChild(a);
        fragment.appendChild(li);
        if (intersectionObserver) {
          intersectionObserver.observe(heading);
        }
      });
    tocTree.appendChild(fragment);
  }

  function installIntersectionObserver() {
    if (
      window.IntersectionObserver &&
      document.body.classList &&
      document.body.scrollIntoView &&
      Array.prototype.findIndex
    ) {
      intersectionObserver = new IntersectionObserver(headingIntersect, {
        root: null,
        rootMargin: '0px 0px -40% 0px',
        threshold: 0,
      });
    }
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
      !(
        document.createElement &&
        document.getElementById &&
        document.querySelectorAll &&
        document.addEventListener &&
        Array.prototype.filter &&
        Array.prototype.forEach
      )
    ) {
      return;
    }

    tocTree = document.getElementById('toc-tree');
    headings = document.querySelectorAll('h2, h3, h4, h5, h6');

    installIntersectionObserver();
    installTocTree();
    installIframeButtons();
  }

  install();
})();
