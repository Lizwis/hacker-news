# Hacker-news clone, Laravel PHP

## Installation

1. clone the repo and cd into it
1. `composer install`
1. rename or copy `.env.example` file to `.env`
2. create a database, call it `hacker-news`
3. download database here https://wetransfer.com/downloads/d8d3c4b3be3fafd7d794d3210da331fb20210514064421/e68a70
4. populate database
5. Enter your database credentials in your `.env` file, edit the following
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=hacker-news
   DB_USERNAME=root
   DB_PASSWORD=
5. `php artisan key:generate`
7. `php artisan serve`
8.  go to http://127.0.0.1:8000
