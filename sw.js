var CACHE_NAME = 'schierker-cache-v1';
var urlsToCache = [
  '/',
  '/stlye.css',
  '/assets/js/script.js'
];

self.addEventListener('install', function (event) {
    // Perform install steps
    event.waitUntil(
        caches.open(CACHE_NAME)
        .then(function (cache) {
            console.log('Opened cache');
            return cache.addAll(urlsToCache);
        })
    );
});
