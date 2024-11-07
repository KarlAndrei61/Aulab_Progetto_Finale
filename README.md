TRADUZIONE IN ITALIANO

REQUISITI

- Laravel

Manuale per installare Laravel: https://laravel.com/docs/11.x/installation

- PHP
  
Manuale per installare PHP: https://www.php.net/manual/en/install.php

- Database MySQL

Link per installare TablePlus: https://tableplus.com/download
Manuale per creare un database: https://tableplus.com/blog/2018/06/mysql-create-database.html

- Imagick(opzionale per il ridimensionamento delle immagini)

Link per installare Imagick: https://imagemagick.org/script/download.php

- Inbox di Mailtrap

Link per creare l'inbox di Mailtrap: https://mailtrap.io/inboxes

PASSAGGI

1. Tra i file dupplica il .env.example e lo rinominerai in .env

2. Crea un database utilizzando TablePlus o un'altra piattaforma per compilare in .env il DB_DATABASE, DB_USERNAME e DB_PASSWORD

3. Crea un nuovo terminale e scrivi i seguenti comandi:

    composer install

    php artisan migrate

    php artisan key:generate

    php artisan db:seed

    npm install

    php artisan storage:link

4. Crea un nuovo terminale e scrivi il seguente comando: npm run dev

5. Crea un nuovo terminale e scrivi il seguente comando: php artisan queue:work

6. Una volta creato l'inbox seleziona l'inbox da usare e sotto nel Code Samples in PHP seleziona la tua versione di Laravel, schiaccerai il tasto Copy e lo incollerai sostituendo tutta la sezione MAIL nel .env

7. Crea un nuovo terminale e scrivi: php artisan serve

8. Prendi l'http uscito dal php artisan serve e mettilo nel browser

ENGLISH TRANSLATION

REQUIREMENTS

- Laravel

Laravel installation manual: https://laravel.com/docs/11.x/installation

- PHP
  
PHP installation manual: https://www.php.net/manual/en/install.php

- MySQL Database

Table plus installation link: https://tableplus.com/download
Database creation manual: https://tableplus.com/blog/2018/06/mysql-create-database.html

- Imagick (optional for image resizing)

Imagick installation link: https://imagemagick.org/script/download.php

- Mailtrap inbox

Link to create Mailtrap inbox: https://mailtrap.io/inboxes

STEP BY STEP GUIDE TO RUN THE WEBSITE 

1. Search among the files .env.example and duplicate it to renamine it .env

2. Create a new database using TablePlus or other platforms to fill out the following DB_DATABASE, DB_USERNAME and DB_PASSWORD in .env 

3. Run a new terminal and type the following commands:

    composer install

    php artisan migrate

    php artisan key:generate

    php artisan db:seed

    npm install

    php artisan storage:link

4. Run a new terminal and type the following command: npm run dev

5. Run a new terminal and type the following command: php artisan queue:work

6. Once you've created an inbox select the inbox that you want to use and going down you'll find Code Samples where in PHP you'll select your Laravel version and click Copy. After copying it you're going to paste it by replacing the MAIL section on .env

7. Run a new terminal and type the following command: php artisan serve

8. After you've typed php artisan serve you're going to copy the http and paste it to the browser
