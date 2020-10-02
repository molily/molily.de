{
  let currentTocLink;
  const headings = document.querySelectorAll('h2, h3, h4, h5, h6');
  const tocTree = document.getElementById('toc-tree');
  const fragment = document.createDocumentFragment();
  const headingIntersect = (entries, observer) => {
    const entry = entries[0];
    let intersectingHeading
    if (entry.isIntersecting && entry.target !== intersectingHeading) {
      intersectingHeading = entry.target;
    } else if (entry.boundingClientRect.y > 0) {
      /* Scrolling upwards */
      const index = Array.from(headings).findIndex((candidate) => candidate === entry.target);
      if (index > 0) {
        intersectingHeading = headings[index - 1]
      }
    }
    if (intersectingHeading) {
      if (currentTocLink) {
        currentTocLink.classList.remove('active');
      }
      const { id } = intersectingHeading;
      const link = tocTree.querySelector(`[href="#${id}"]`);
      if (link) {
        link.classList.add('active');
        link.scrollIntoView({ block: 'center' });
        currentTocLink = link;
      }
    }
  };
  const intersectionObserver = new IntersectionObserver(headingIntersect, {
    root: null,
    rootMargin: '0px 0px -50% 0px',
    threshold: 0
  });
  Array.from(headings).forEach((heading) => {
    const li = document.createElement('li');
    const a = document.createElement('a');
    a.href = `#${heading.id}`;
    const tag = heading.tagName.toLowerCase();
    const level = parseInt(tag[1], 10);
    a.textContent = heading.textContent;
    li.classList.add(`toc-heading-level-${level}`);
    li.appendChild(a);
    fragment.appendChild(li);
    intersectionObserver.observe(heading);
  });
  tocTree.appendChild(fragment);

  const loadIframeButtons = document.querySelectorAll('.load-iframe');
  Array.from(loadIframeButtons).forEach((button) => {
    button.addEventListener('click', () => {
      const button = event.target;
      const scriptTemplate = button.parentNode.nextElementSibling;
      const iframeHTML = scriptTemplate.textContent;
      const container = document.createElement('div');
      container.innerHTML = iframeHTML;
      scriptTemplate.replaceWith(container);
      button.remove();
    });
  });
}
