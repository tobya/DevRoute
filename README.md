# DevRoute
A laravel package.

Adds a Dev Routes routing file where you can store routes that are available for local testing, but unavailable in production.

All the routes will be unavailable if your 

> APP_ENV 

is set to 'production'

Very useful when you have testing routes that you definitely dont want available when running in production.
