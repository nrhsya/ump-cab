## About UMPCAB

UMPCAB is a system I developed for UMP college students to easily access public transport to accommodate them to class. Students can be both the car owners and the customers in this system. Some of the features of this system includes:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).


# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/10.x)

Clone the repository

    git clone https://github.com/nrhsya/ump-cab.git

Switch to the repo folder

    cd ump-cab

Install all the dependencies using composer and npm

    composer install
    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Or if you want to run the database migrations together with the seeder

    php artisan migrate:fresh --seed

Build your assets & start the local development server

    php artisan filament:assets
    npm run build
    npm run dev

**Command list**

    git clone https://github.com/andrewdwallo/erpsaas.git
    cd ump-cab
    composer install
    npm install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate
    npm run build
    npm run dev

## Database seeding

**You may populate the database to help you get started quickly**

Open the DatabaseSeeder and set the property values as per your requirement

    database/seeders/DatabaseSeeder.php

Admin login information:

    email: admin@admin.com
    password: admin

User login information:

    email: user@user.com
    password: password

Run the database seeder

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh


## Dependencies

- [filamentphp/filament](https://github.com/filamentphp/filament) - A collection of beautiful full-stack components
- [andrewdwallo/filament-companies](https://github.com/andrewdwallo/filament-companies) - A complete authentication system kit based on companies built for Filament
- [andrewdwallo/transmatic](https://github.com/andrewdwallo/transmatic) - A package for automatic translation using machine translation services
- [akaunting/laravel-money](https://github.com/akaunting/laravel-money) - Currency formatting and conversion package for Laravel
- [squirephp/squire](https://github.com/squirephp/squire) - A library of static Eloquent models for common fixture data

***Note*** : It is recommended to read the documentation for all dependencies to get yourself familiar with how the application works.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
