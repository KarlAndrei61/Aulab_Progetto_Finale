
REQUISITI

Laravel
Manuale per installare Laravel: https://laravel.com/docs/11.x/installation

PHP
Manuale per installare PHP: https://www.php.net/manual/en/install.php

Database MySQL
Link per installare TablePlus: https://tableplus.com/download
Manuale per creare un database: https://tableplus.com/blog/2018/06/mysql-create-database.html

OPZIONALE PER LE IMMAGINI

- Imagick (opzionale per vedere le immagini)
Installazione Imagick per Windows: https://imagemagick.org/script/download.php

PASSAGGI

1. Tra i file dupplica il .env.example e lo rinominerai in .env

2. Crea un database utilizzando TablePlus o un'altra piattaforma per compilare in .env il DB_DATABASE, DB_USERNAME e DB_PASSWORD

3. Crea un nuovo terminale e scrivi seguenti comandi:

    composer install

    php artisan migrate

    php artisan key:generate

    php artisan db:seed

    npm install

    php artisan storage:link

4. Crea un nuovo terminale e scrivi il seguente comando: npm run dev

5. Crea un nuovo terminale e scrivi il seguente comando: php artisan queue:work

6. Mettere il mailtrap copiato con il tasto copy e metterlo nel .env

7. Crea un nuovo terminale e scrivi: php artisan serve

8. Prendi l'http uscito dal php artisan serve e mettilo nel browser