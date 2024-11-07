
REQUISITI

- Laravel
Manuale per installare Laravel: https://laravel.com/docs/11.x/installation

- PHP
Manuale per installare PHP: https://www.php.net/manual/en/install.php

- Database MySQL
Link per installare TablePlus: https://tableplus.com/download
Manuale per creare un database: https://tableplus.com/blog/2018/06/mysql-create-database.html

OPZIONALE PER LE IMMAGINI

- Imagick (opzionale per vedere le immagini)
Installazione Imagick per Windows: https://imagemagick.org/script/download.php

PASSAGGI

1.Dupplica il .env

2.Composer install

3.Collega il nome del database in .env

4.php artisan migrate

5.php artisan key:generate

6.php artisan db:seed

7.npm install

8. npm run dev

9.php artisan storage:link

10.php artisan queue:work

11.Mettere il mailtrap copiato con il tasto copy e metterlo nel .env

12.php artisan serve, prendere l'http uscito e metterlo nel browser