# DevRoute
A laravel package.

Adds a Dev Routes routing file where you can store routes that are available for local testing, but unavailable in production.

All the routes will be **unavailable** if your 

> APP_ENV=production

Very useful when you have testing routes that you definitely dont want available when running in production.

##Installation

> composer require tobya/devroute
> 

Once installed will create a file routes/devroutes.php 

Place any dev routes in this file, they are all prefixed with 'dev'.  'dev' routes have the standard web middlewares.

````php

Route::get('/testuser/{user}', function($user){
  echo $user->name;
});

````

if you visit `example.com/dev/testuser/4` you will get the information.
