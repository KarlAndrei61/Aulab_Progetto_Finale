PASSAGGI PER FAR FUNZIONARE IL SITO

1. Duplicare il .env.example  e chiamarlo .env 

2. Configurare il database mettendo il nome del databse su DB_DATABASE" e metterndp i seguenti DB_USERNAME e DB_PASSWORD del database

SU TERMINALE

1. Lanciare "composer install"

2. Lanciare i seguenti "npm install i bootstrap" e "npm run dev"

3. Lanciare "php artisan queue:work"

4. Php artisan storage:link

SU MAILTRAP.COM

1. Creerai un'inbox e copierai la SMTP di essi in formato Laravel 9+ e la metterai al posto della MAIL in default del .env

FAR PARTIRE IL SITO 

1. Su terminale ti basterà scrivere php artisan serve 

2. sul browser copiare il https del server in terminale come http://127.0.0.1:8000


