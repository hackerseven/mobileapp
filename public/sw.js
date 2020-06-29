const propertiesCache = "properties";

const assets = [
    'home',
    'https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500',
    'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
    'webapp/css/bootstrap-datepicker.css',
    'webapp/css/mediaelementplayer.css',
    'webapp/css/animate.css',
    'webapp/fonts/flaticon/font/flaticon.css',
    'webapp/css/fl-bigmug-line.css',
    'webapp/fonts/icomoon/style.css',
    'webapp/css/bootstrap.min.css',
    'webapp/css/magnific-popup.css',
    'webapp/css/jquery-ui.css',
    'webapp/css/owl.carousel.min.css',
    'webapp/css/owl.theme.default.min.css',
    'webapp/css/aos.css',
    'webapp/css/style.css',
    'webapp/js/jquery-3.3.1.min.js',
    'webapp/js/jquery-ui.js',
    'webapp/js/popper.min.js',
    'webapp/js/bootstrap.min.js',
    'webapp/js/owl.carousel.min.js',
    'images/propmedia/1582104597-umiya-business-bay-bangalore-1.jpg',
    'images/propmedia/1578542240-the-pavilion-ii-bangalore-1.jpg',
    'images/propmedia/1578542236-the-pavilion-i-bangalore-1.jpg',
    'images/propmedia/1578542213-miraya-rose-whitefield-bangalore-1.jpg',
    'images/propmedia/1578542223-seawoods-grand-central-iii-mumbai-1.jpg',
    'images/propmedia/1578665094-the-capital-bkc-ii-mumbai-1.jpg',
    'images/propmedia/1578665089-ibc-knowledge-park-ii-bangalore-1.jpg',
    'images/propmedia/1578665086-ibc-knowledge-park-bangalore-1.jpg',
    'images/propmedia/1578665092-the-capital-mumbai-1.jpg',
    'images/propmedia/1578542226-sky-vista-pune-1.jpg',
    'images/propmedia/1578542212-manjeera-trinity-corporate-hyderabad-1.jpg',
    'images/propmedia/1578542197-brigade-tech-park-ii-bangalore-1.jpg',
    'images/propmedia/1578542243-umiya-business-bay-i-bangalore-1.jpg',
    'images/propmedia/1578542219-seawoods-grand-central-ii-mumbai-1.jpg',
    'images/propmedia/1578542216-seawoods-grand-central-mumbai-1.jpg',
    'images/propmedia/1578542194-brigade-tech-park-bangalore-1.jpg',
    'images/propmedia/1578542200-embassy-tech-square-bangalore-1.jpg',
    'images/propmedia/1578542246-umiya-business-bay-ii-bangalore-1.jpg',
    'webapp/js/main.js',
    'webapp/images/loader.gif',
    'webapp/js/aos.js'
];

self.addEventListener('install', evt => {
    //console.log('service worker has been installed');
    evt.waitUntil(
        caches.open(propertiesCache).then(cache => {
            console.log('caching assets');
            cache.addAll(assets);
        })
    );
});

self.addEventListener('activate', evt => {
    console.log('service worker has been activated');
});

self.addEventListener('fetch', evt => {
    console.log('service worker fetch event');
    evt.respondWith(
        caches.match(evt.request)
            .then(res => {
                return res || fetch(evt.request);
            })
    )
});
