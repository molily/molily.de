(function () {
  'use strict';

  /** @type {HTMLOListElement} */
  var tocTree;
  /** @type {HTMLHeadingElement[]} */
  var headings;

  /** @type {HTMLAnchorElement} */
  var currentTocLink;
  /** @type {IntersectionObserver} */
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
      return candidate.target.id !== 'toc-heading';
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

  function installHighlightToc() {
    if (
      document.getElementById &&
      document.querySelectorAll &&
      window.IntersectionObserver &&
      window.matchMedia &&
      document.body.classList &&
      document.body.scrollIntoView &&
      Array.prototype.findIndex &&
      Array.prototype.filter &&
      Array.prototype.forEach
    ) {
      tocTree = document.getElementById('toc-tree');
      headings = document.querySelectorAll('h2, h3, h4, h5, h6');

      intersectionObserver = new IntersectionObserver(headingIntersect, {
        root: null,
        rootMargin: '0px 0px -40% 0px',
        threshold: 0,
      });

      arrayFrom(headings)
        .filter(function (heading) {
          return heading.id !== 'toc-heading';
        })
        .forEach(function (heading) {
          intersectionObserver.observe(heading);
        });
    }
  }

  installHighlightToc();
})();
