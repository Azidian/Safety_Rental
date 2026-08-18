# Development of an Online Store Using Laravel

## Description

This project is a basic online store developed using Laravel as part of the Laravel Tutorials and Taller 01 at Universidad EAFIT.

The project demonstrates Laravel's MVC architecture, routes, controllers, Blade views, form validation, Eloquent models, migrations, seeders, and database management.

For Taller 01, the `Location` class was selected and developed independently, working only with its primitive attributes and without including relationships with other classes.

## Features

- Home, About, and Contact pages.
- Product listing, details, and creation.
- Product validation using `ProductRequest`.
- Product-Comment relationship.
- Database migrations, factories, and seeders.
- Location creation and validation.
- Prevention of duplicate Locations.
- Location listing and detail view.
- Location deletion.
- Blade views and reusable layout.
- Laravel Pint code formatting.

## Technologies

- PHP 8.3+
- Laravel 13
- Blade
- MySQL
- Composer

## Location Management

The main functionality developed for Taller 01 is the management of `Location`.

The class uses the following primitive attributes:

- `id`
- `address`
- `name`
- `headquarters`
- `phone`
- `city`

The attributes are private and the class provides public getters and setters.

The main Location routes are:

```text
/locations/menu       → Location menu
/locations            → List Locations
/locations/create     → Create Location
/locations/{id}       → View a Location
````

A Location can be created through the form, validated before being stored, viewed individually, and deleted from its detail page. The application also prevents the creation of duplicate Locations.

## Application Structure

The project follows a separation of responsibilities between routes, controllers, form requests, models, and Blade views.

```text
User
  ↓
Route
  ↓
Controller
  ↓
Request / Model
  ↓
View
```

## Database

The project uses MySQL with the database:

```text
laravelcourse
```

The `locations` table stores the information associated with the `Location` class.

## Laravel Pint

To format the PHP code:

```bash
vendor/bin/pint
```

## Installation

Install the dependencies:

```bash
composer install
```

Create the `.env` file from `.env.example` and configure the MySQL connection.

Generate the application key:

```bash
php artisan key:generate
```

Run the migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

The Location Management menu is available at:

```text
http://127.0.0.1:8000/locations/menu
```

For detailed setup instructions, see `setup.txt`.

## Author

**Wendy Vanessa Atehortua Chaverra**

Universidad EAFIT

## Professor

**Daniel Correa Botero**

