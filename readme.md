# About

## Functions 

* The server provides access to API's provided by the service providers of the service network.
* No database connectivity is required for the current state of the application

## Services

* Location service requirements are done through the Ideamart location based services API
* Text notification service for all events are done through Ideamart text messaging API
* Tow service, taxi bookiing service will be done thorugh the API's of the registered service providers


## Installation instructions

Clone the repository.

Open terminal from the project folder 

Configure database connectivity with the .env file ( If not found, rename .env.example as .env and modify)

Run command "php artisan key:generate"

Run command "composer install" to install the dependencies

Run command "php artisan migrate" to perform migrations on the database

Run command "php artisan serve" to start the server on localhost:8000

## Notes

The server has been built with laravel 5.3 

[Manual for composer can be found here](https://getcomposer.org/doc/00-intro.md)

[Manual for php artisan cli](https://laravel.com/docs/5.3/artisan)

[Laravel 5.3 documentation](https://laravel.com/docs/5.3)
