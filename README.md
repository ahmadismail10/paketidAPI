## Step Instalasi

- Intsall [xampp](https://www.apachefriends.org/download.html).
- Install [composer](https://getcomposer.org/download/).
- Rename file .env.example menjadi .env
- letakkan project di folder xampp/htdocs untuk windows atau /var/www/ untuk Linux
- buka directory project lalu jalankan ```composer update```
- install [mongodb](https://www.mongodb.com/try/download/community).
- install [php mongodb](https://docs.mongodb.com/drivers/php).
- ubah file php.ini dengan ```extension=php_mongodb```
- jalankan ```composer require mongodb/mongodb```
- jalankan ```composer require jenssegers/mongodb```
- buat database dengan nama "paketid"
- jalankan ```php artisan migrate```
- dokumentasi API dapat dilihat di [sini](https://dark-robot-9846.postman.co/workspace/ae9c8841-deec-4f88-822f-15be02a69fbe/documentation/2417588-583ce38c-ec22-4485-b7fb-b22213ce1a07).