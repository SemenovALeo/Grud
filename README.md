## Установка
установить PHP-7.4+

установить MySQL

установить composer

cd /var/www/

git clone https://github.com/Buzuluk56/Grud folder

cd folder

composer install

define database, APP_KEY in .env

php artisan migrate --seed

php artisan serve
