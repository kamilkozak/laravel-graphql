# Laravel GraphQL

## Installation

Clone the repo locally:

```sh
git clone https://github.com/kamilkozak/laravel-graphql.git laravel-graphql
cd laravel-graphql
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Go to:

```sh
{APP_URL}/graphql-playground
```
