# Laravel 5 example survey site
Wanted to build basic example survey site on Laravel 5 to play around with.  It has a public component that shows currently available surveys, and an administrative section that allows for the creation and editing of the surveys.


## Overview
Coming soon..

#### Composer require
- PHP >= 5.5.4
- laravel/framework
- tymon/jwt-auth

#### Bower require
- bootstrap
- font-awesome
- metisMenu
- jquery-nestable
- toastr
- pace
- validate

####Jquery plugins used
- toastr: Notification lib
- pace: Loading bar for admin pages
- nestable: Sorting of question & answer orders in andmin
- validate: Form validation
- metismenu: Collapsable side navigation menu

## Installation

Clone the respository locally:

```
$ git clone https://github.com/pringlized/surverysayz-laravel5.git
```

Run composer to install all dependencies:

```
$ composer install
```

Copy the .env.example file to .env and update the update name, user & password:

```
$ cp .env.example .env
```

Create the database 'l5ss', then migrate and seed the db:

```
$ php artisan migrate
$ php artisan db:seed
```

After that set up you apache/nginx environment or simply run the php cli server in the public/ folder:

```
$ php -S 127.0.0.1:8080
```

##Accessing the admin
There are currently 3 user types: user, contributor, and user.

###user login

```
email: mmaser@fakedomain.com
pass: somesecret
```

###contributor login

```
email: pflood@fakedomain.com
pass: somesecret
```

###admin login

```
email: sConnor@fakedomain.com
pass: somesecret
```

## Creation & Editorial process
Coming soon..

## Improvements
- 'roles' DB table
- wire up 'favorites' & 'do later'
- repository pattern for API data retrieval