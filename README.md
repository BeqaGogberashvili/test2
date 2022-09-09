
<p align="center">Movie Quotes<img src="#" width="100" alt="Movie Quotes Logo"></p>

<p>Movie Quotes app is a platform where you can store your movies and quotes.</p>

<p>Once stored, one of the quotes randomly displays on the main page. From clicking the movie title you can see list of all quotes corresponding the movie. App has no registration page so you must create one with artisan command. Here every user is considered as Admin, so they have the ability to create, read, update and delete any record (CRUD). Be careful if you delete a movie because all the related quotes disapear with them.</p>


#
### Table of Contents
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Migrations](#migration)
* [Development](#development)
* [DrawSQL](#drawsql)


#
### Prerequisites

* <img src="readme/assets/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@7.2 and up*
* <img src="readme/assets/mysql.png" width="35" style="position: relative; top: 4px" /> *MYSQL@8 and up*
* <img src="readme/assets/composer.png" width="35" style="position: relative; top: 6px" /> *composer@2 and up*


#
### Tech Stack

* <img src="readme/assets/laravel.png" height="18" style="position: relative; top: 4px" /> [Laravel@6.x](https://laravel.com/docs/6.x) - back-end framework
* <img src="readme/assets/spatie.png" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

#
### Getting Started

1\. First you need to clone Movie Quotes repository from github:
```sh
git clone https://github.com/RedberryInternship/beka-gogberashvili-movie-quotes.git
```

2\. Next step requires you to run composer install for PHP dependencies:
```sh
composer install
```


And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****


#
**MAILGUN:**
>MAILGUN_DOMAIN=******

>MAILGUN_SECRET=******

#
**Georgian Card:**
>MERCHANT_ID=******

>PAGE_ID=******

>ACCOUNT_ID=******

>BACK_URL_S=******

>BACK_URL_F=******

>REFUND_API_PASS=******

>CCY=******

#
**Twilio:**
>TWILIO_SID=******

>TWILIO_TOKEN=******

>TWILIO_FROM=******

#
**Maradit:**
>MARADIT_HTTPS=true

>MARADIT_USERNAME=******

>MARADIT_PASSWORD=******

#
**Google Cloud Messaging:**
>FCM_SERVER_KEY=******

>FCM_SENDER_ID=******

After setting up **.env** file, execute:
```sh
php artisan config:cache
```
in order to cache environment variables.

Now execute in the root of you project following:
```sh
  php artisan key:generate
```
Which generates auth key.

##### Now, you should be good to go!


#
### Migration
After 'getting started' section we're ready to migrate tables in our db, execute:
```sh
php artisan migrate
```

#
### Running Unit tests
Also for running unit tests type in following command:

```sh
composer test
```

#
### Development

Run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

#
### DrawSQL

https://drawsql.app/teams/team-301/diagrams/movie-quotes