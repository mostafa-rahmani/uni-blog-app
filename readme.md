# Laravel Blog

A simple blog for demonstration purpose. Based on Laravel 7.0

## Requirements

- Laravel 7.0
- PHP >= 7.2.5
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension



## Installation

```
git clone https://github.com/mostafa-rahmani/uni-blog-app
cd uni-blog-app
composer install
cp .env.example .env
touch ./database/database.sqlite
php artisan key:generate
php artisan migrate

```
open .env file and correct the address for DB_DATABASE
