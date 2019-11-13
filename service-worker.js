const VERSION = 'v2';
const PAGES_CACHE = `${VERSION}_PAGES`;
const CACHED_RESOURCES = [
  '/',
  '/css/blog.css',
  '/img/spidermum.png',
  '/assets/fonts/noto-sans-normal-normal-latin.woff2',
  '/assets/fonts/noto-sans-normal-bold-latin.woff2',
  '/robust-javascript/',
  '/css/book.css',
  '/img/robust-js-500-q75.jpg',
  '/img/robust-js-1000-q40.jpg'
];

addEventListener('install', (event) => {
  skipWaiting();
});

addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((keys) =>
      Promise.all(
        keys
          .filter((key) => !key.startsWith(VERSION))
          .map((key) => {
            console.log('delete from cache', key);
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
        })
      )
  );
});
