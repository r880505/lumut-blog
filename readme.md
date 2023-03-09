### Admin user : 
email : demo@example.com
password : demopassword


## Requirements
- Requires a minimum PHP version of 8.0


### Installation

Require Composer.


1. Install the dependencies

```sh
$ cd your-project-directory
$ composer install
```

2. Open .env.example and save it as ".env"

3. Generate application key :

```sh
$ php artisan key:generate
```



4. Create mysql database and enter database credentials in .env file  

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_writer
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migration and seed user :

```sh
$ php artisan migrate
$ php artisan db:seed UserTableSeeder
```


6. Start the dev server :

```sh
$ php artisan serve
```



