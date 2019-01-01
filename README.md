# Laravel blog

This project was created for my Graduate studies of Development of applications for web and mobile devices.

## Installing

Clone the project and enter into the project folder:
```sh
$ git clone https://github.com/carollaginestra/laravel-blog.git
$ cd laravel-blog
```

Install composer:
```sh
$ composer install
$ composer update
```

### Start project

Change the env example to your env and change the file data according to your database:
```sh
$ cp .env.example .env
```

After configuring env, generate a new key for the application:
```sh
$ php artisan key:generate
```

Run the migrations to populate the database:
```sh
$ php artisan migrate:refresh --seed
```

run the project:
```sh
$ php artisan serve --port 8888
```

Verify the deployment by navigating to your server address in your preferred browser:
```sh
$ localhost:8888
```