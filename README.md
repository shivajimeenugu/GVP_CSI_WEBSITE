
**How to Configure the GVP\_CSI\_WEBSITE project**

**Tools and Software need to be installed:**

1. Xampp Application 

<https://www.apachefriends.org/download.html>

**(imp: set PHP path before proceeding to next step)**

1. Composer

<https://getcomposer.org/Composer-Setup.exe>

`    `3. Node JS (for npm only)

[https://nodejs.org/dist/v18.12.1/node-v18.12.1-x64.msi	](https://nodejs.org/dist/v18.12.1/node-v18.12.1-x64.msi)



`    `4. VS Code and Git (You already know about these)

**[After Installing the above tools and software follow the below steps]**

**Step1:** Create a folder where ever you want to open that folder location in the command prompt and type the below command

**Step2:**  run the below commands one by one

git clone <https://github.com/shivajimeenugu/GVP_CSI_WEBSITE>

cd GVP\_CSI\_WEBSITE

npm install –-force

composer install

**Step3:**  you already have a file **.env.example**, copy and paste that file to another copy in the exact location and rename it to **.env** 

**[run xampp application and start mysql , apache and make sure both are running  ]**

**Step4:**  run the below commands one by one

npm run dev

php artisan migrate

php artisan serve

The application started running in <http://127.0.0.1:8000> by default







<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

