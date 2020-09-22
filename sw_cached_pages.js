//membuat name cache 
const cacheName = 'v1';

const cacheAssets = [
//memanggil laman yang akan di cache
'index.php',
'/pages/',
'/assets/css/animate.css',
'/assets/css/animate.css',
'/assets/css/bootstrap.min.css',
'/assets/css/font.css',
'/assets/css/font-awesome.min.css',
'/assets/css/jquery.fancybox.css',
'/assets/css/li-scroller.css',
'/assets/css/slick.css',
'/assets/css/style.css',
'/assets/css/theme.css',
'/assets/css/images/blank.gif',
'/assets/css/images/fancybox_loading.gif',
'/assets/css/images/fancybox_loading@2x.gif',
'/assets/css/images/fancybox_overlay.png',
'/assets/css/images/fancybox_sprite.png',
'/assets/css/images/fancybox_sprite@2x.png',
'/assets/css/images/slider_next.png',
'/assets/css/images/slider_prev.png',
'/assets/css/images/socials.png',
'/assets/css/images/status.gif',
'/assets/fonts/FontAwesome.otf',
'/assets/fonts/fontawesome-webfont.eot',
'/assets/fonts/fontawesome-webfont.svg',
'/assets/fonts/fontawesome-webfont.ttf',
'/assets/fonts/fontawesome-webfont.woff',
'/assets/fonts/glyphicons-halflings-regular.eot',
'/assets/fonts/glyphicons-halflings-regular.svg',
'/assets/fonts/glyphicons-halflings-regular.ttf',
'/assets/fonts/glyphicons-halflings-regular.woff',
'/assets/fonts/OpenSans-400.woff',
'/assets/fonts/Oswald-Regular-400.woff',
'/assets/fonts/Varela-400.woff',
'/assets/js/bootstrap.min.js',
'/assets/js/custom.js',
'/assets/js/html5shiv.min.js',
'/assets/js/jquery.fancybox.pack.js',
'/assets/js/jquery.li-scroller.1.0.js',
'/assets/js/jquery.min.js',
'/assets/js/jquery.newsTicker.min.js',
'/assets/js/metode.js',
'/assets/js/respond.min.js',
'/assets/js/slick.min.js',
'/assets/js/wow.min.js',
'/images/add_img.jpg',
'/images/favicon.ico',
'/images/featured_img1.jpg',
'/images/featured_img2.jpg',
'/images/featured_img3.jpg',
'/images/icon.jpg',
'/images/logo.jpg',
'/images/news_thumbnail2.jpg',
'/images/news_thumbnail3.jpg',
'/images/photograph_img2.jpg',
'/images/photograph_img3.jpg',
'/images/photograph_img4.jpg',
'/images/post_img1.jpg',
'/images/post_img2.jpg',
'/images/single_post_img.jpg',
'/images/slider_img1.jpg',
'/images/slider_img2.jpg',
'/images/slider_img3.jpg',
'/images/slider_img4.jpg'
];

// Call Install Event
self.addEventListener('install', e => {
  console.log('Service Worker: Installed');

  e.waitUntil(
    caches
      .open(cacheName)
      .then(cache => {
        console.log('Service Worker: Caching Files');
        cache.addAll(cacheAssets);
      })
      .then(() => self.skipWaiting())
  );
});

// Call Activate Event
self.addEventListener('activate', e => {
  console.log('Service Worker: Activated');
  // Remove unwanted caches
  e.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cache => {
          if (cache !== cacheName) {
            console.log('Service Worker: Clearing Old Cache');
            return caches.delete(cache);
          }
        })
      );
    })
  );
});

// Call Fetch Event
self.addEventListener('fetch', e => {
  console.log('Service Worker: Fetching');
  e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));
});