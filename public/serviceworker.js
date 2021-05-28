const CACHE_NAME = 'cache_v1_comuniTec',
  urlsToCache = [
        '/offline',
        '/css/app.css',
        '/js/app.js',
        '/images/icons/icon-72x72.png',
        '/images/icons/icon-96x96.png',
        '/images/icons/icon-128x128.png',
        '/images/icons/icon-144x144.png',
        '/images/icons/icon-152x152.png',
        '/images/icons/icon-192x192.png',
        '/images/icons/icon-384x384.png',
        '/images/icons/icon-512x512.png',

  ]

self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache)
          .then(() => self.skipWaiting())
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
})




self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.match(event.request)
        .then(function(response) {
          // Cache hit - return response
          if (response) {
            return response;
            console.log("hola recuperé esto para ti");
          }
          return fetch(event.request);
        }
      )
    );
  });

  self.addEventListener('activate', function(event) {
    var cacheWhitelist = [CACHE_NAME];
    event.waitUntil(
      caches.keys().then(function(cacheNames) {
        return Promise.all(
          cacheNames.map(function(cacheName) {
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName);
            }
          })
        );
      })
    );
  });


