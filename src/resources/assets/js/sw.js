require('./data/static-files.js');
require('./data/routes.js');

var cacheResourcesGroupName = "ehosp-cache-v5";
var cacheResources = [].concat(ROUTES_TO_CACHE, STATIC_FILES_TO_CACHE);


// Register the new worker and install new cache
self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(cacheResourcesGroupName).then(function(cache) {
            return cache.addAll(cacheResources);
        })
    );
});

// Keep only the most recent cache
self.addEventListener('activate', function(event) {
    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.filter(function(cacheName) {
                    return cacheName.startsWith('ehosp-') &&
                           cacheName != cacheResourcesGroupName;
                }).map(function(cacheName) {
                    return cache.delete(cacheName);
                })
            );
        })
    );
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request).then(function(response) {
            if (response) {
                return response;
            } else {
                try {
                    return fetch(event.request);
                } catch (e) {
                    // 
                }
            }
        })
    );
});
