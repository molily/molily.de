const VERSION = 'v4';
const PAGES_CACHE = `${VERSION}_PAGES`;
const OFFLINE_PAGE = 'offline.html';
const CACHED_RESOURCES = [
  OFFLINE_PAGE,
  '/',
  '/css/blog.css',
  '/css/book.css',
  '/assets/manifest.json',
  '/assets/fonts/noto-sans-normal-normal-latin.woff2',
  '/assets/fonts/noto-sans-italic-normal-latin.woff2',
  '/assets/fonts/noto-sans-normal-bold-latin.woff2',
  '/robust-javascript/',
  '/img/spidermum.png',
  '/img/robust-js-500-q75.jpg',
  '/img/robust-js-1000-q40.jpg',
  '/assets/link-types.js',
  '/assets/highlight-toc.js',
  '/assets/iframe-buttons.js',
  '/assets/collapse-toc.js',
];

addEventListener('install', (event) => {
  skipWaiting();

  event.waitUntil(
    fetch(OFFLINE_PAGE).then((response) =>
      caches.open(PAGES_CACHE).then((cache) =>
        cache.put(OFFLINE_PAGE, response)
      )
    )
  );
});

addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((keys) =>
      Promise.all(
        keys
          .filter((key) => !key.startsWith(VERSION))
          .map((key) => {
            console.log('Delete from cache', key);
            return caches.delete(key);
          })
      )
    )
  );
});

function isRelevantRequest(method, url) {
  const urlParts = new URL(url);
  return (
    method === 'GET' &&
    urlParts.origin === location.origin &&
    CACHED_RESOURCES.some((resourceUrl) => resourceUrl === urlParts.pathname)
  );
}

addEventListener('fetch', (event) => {
  const { request } = event;
  const { method, url } = request;
  if (!isRelevantRequest(method, url)) {
    return;
  }
  event.respondWith(
    fetch(request)
      .then((response) => {
        const responseClone = response.clone();
        caches.open(PAGES_CACHE).then((cache) => {
          cache.put(request, responseClone);
        });
        return response;
      })
      .catch(() =>
        caches.match(request).then((responseFromCache) => {
          if (responseFromCache) {
            return responseFromCache;
          }
          // Serve offline page
          return caches
            .open(PAGES_CACHE)
            .then((cache) => cache.match(OFFLINE_PAGE));
        })
      )
  );
});
