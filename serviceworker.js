var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  '/',
  'http://localhost/proyek-web/zada-studio-musik-codeigniter/assets/css/bootstrap.min.css',
  'http://localhost/proyek-web/zada-studio-musik-codeigniter/assets/css/font-awesome.css',
  'http://localhost/proyek-web/zada-studio-musik-codeigniter/assets/css/templatemo-art-factory.css',
  'http://localhost/proyek-web/zada-studio-musik-codeigniter/assets/css/owl-carousel.css'
];

self.addEventListener('install', e => {
  e.waitUntil(
     caches.open('fusion').then(cache => {
         return cache.addAll(urlsToCache).then(() => self.skipWaiting());
     })
   )
 });
 
 self.addEventListener('activate', (event) => {
   event.waitUntil(async function() {
     const cacheNames = await caches.keys();
     await Promise.all(
       cacheNames.filter((cacheName) => {
         // Return true if you want to remove this cache,
         // but remember that caches are shared across
         // the whole origin
       }).map(cacheName => caches.delete(cacheName))
     );
   }());
 });
 
 self.addEventListener('fetch', function(event) {
     console.log('fetching url:'+event.request.url);
     event.respondWith(async function() {
     try {
       var fetchRequest = event.request.clone();
       return await fetch(fetchRequest).then(
             function(response) {
               if(!response || response.status !== 200 || response.type !== 'basic') {
                 return response;
               }
               var responseToCache = response.clone();
   
               caches.open(CACHE_NAME)
                 .then(function(cache) {
                   cache.put(event.request, responseToCache);
                 })
               return response;
             }
           )
     } catch (err) {
       return caches.match(event.request)
         .then(function(response) {
           console.log('cache match, return cache');
           if (response) {
             return response;
           }else{
             return caches.match('http://localhost/proyek-web/zada-studio-musik-codeigniter/offline.html')
           }
         })
     }
   }());
   });