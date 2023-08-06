<div align="center">

<h1> Laravel portofile application  </h1>

 [![Send me a message on WhatsApp](https://img.shields.io/static/v1.svg?label=Send%20a%20message&message=🙈&color=1ebea5&logo=whatsapp&logoColor=white&labelColor=1ebea5)](https://wa.me/201141640812?text=I'm%20interested%20in%20your%20car%20for%20sale)
[![Email me](https://img.shields.io/static/v1.svg?label=Email%20me&labelColor=blueviolet&message=🌎)](mailto:ahmedhamdy.mh95@gmail.com)
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</div>

# overview

- ####  I    Requirements
- ####   II   Setup environments
- ####   III  build-in server
- ####   IIII Create Database  with - phpmyadmin
- ####   V   Api test
- ####   VI unit test 
####   VII Testing

# what is Laravel

* Laravel is a web application framework with expressive, elegant syntax. We believe development must

# requirements
  - * PHP >= 8.0

  - * Apache server [ `wamp,mamp,xampp,lampp` ] or u can use build-in server

  * - MySql Database : `MySQL ,Psql`
  * - Composer installed on your machine

# Setup Environments

* install all dependencies except dev

     ```bash
    > composer install --no-dev
    > npm install
    > npm run watch
    ```

* create database and migrate tables
   ```bash
   php artisan migrate
   ```
* rollback
   ```php
   php artisan migrate:rollback 
   ```
# build-in server
- Run larvel server
   - > php artisan serve
# Create database with php my admin
1. open browser and go to http://localhost/phpmyadmin
2. click new button in left side bar
3. enter name of the databse you want to create (ex: test)
4. select type as "utf8mb4"
5. click submit

# api testing
1. open postman app
2. import file from project folder named "api_test.postman_collection.json".
3. change url to localhost:port/api/v1/{route} where port =
default port number for laravel server(8000).
4. hit send request.

# unit test
```bash
> vendor\bin\phpunit tests\\Unit\\{nameOfTestFile}.php
or
> vendor\bin\phpunit {pathToTheFolderContainingTests}\\{nameOfTestFile}.php
```
