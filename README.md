<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## What you need to run this project

    PHP
    PostgreSQL
    Nodejs
    

**To install the packages needed to run this project**

```bash
npm install
npm run dev
```

## How to run this project

    Edit the .env file with your credentials
    
    DB_CONNECTION=pgsql
    DB_HOST='IP'
    DB_PORT='port' 
    DB_DATABASE='name of database'
    DB_USERNAME='name'
    DB_PASSWORD='password'

You need to create the database before exporting the database tables

```bash
php artisan migrate
```

Then 

    php artisan serve

If everything works as attended, you should see a page looking like this : 



![ScreenShot] (page_accueil.png)



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
