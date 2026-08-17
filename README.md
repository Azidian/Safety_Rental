# Development of an Online Store Using Laravel

## Description

This project is a basic online store developed using Laravel. It was created as part of Tutorials Laravel 1 and 2 at Universidad EAFIT.

The project demonstrates Laravel's MVC architecture, routes, controllers, Blade views, form validation, database migrations, Eloquent models, factories, seeders, and relationships.

The project also follows the architectural guidelines established for the course, keeping responsibilities separated between controllers, models, data classes, form requests, and views.

## Features

- Home, About, and Contact pages.
- Product listing and product detail pages.
- Product creation form.
- Product validation using `ProductRequest`.
- Product creation using Eloquent.
- Product data stored in MySQL.
- Product and Comment models.
- Product-Comment relationship.
- Database migrations.
- Factories and database seeders.
- Three comments associated with product ID `1`.
- Redirection when a product does not exist.
- Conditional product display using Blade.
- Reusable Blade layout.
- Bootstrap styling.
- Laravel Pint code formatting.

## Technologies

- PHP 8.3+
- Laravel 13
- Blade
- Bootstrap 5
- MySQL
- phpMyAdmin
- Composer
- Laravel Pint

## Project Structure

```text
laravelcourse/
│
├── app/
│   ├── Data/
│   │   └── ProductData.php
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Controller.php
│   │   │   ├── HomeController.php
│   │   │   ├── ContactController.php
│   │   │   └── ProductController.php
│   │   └── Requests/
│   │       └── ProductRequest.php
│   └── Models/
│       ├── User.php
│       ├── Product.php
│       └── Comment.php
│
├── database/
│   ├── factories/
│   │   ├── ProductFactory.php
│   │   └── UserFactory.php
│   ├── migrations/
│   │   ├── create_products_table.php
│   │   └── create_comments_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home/
│       └── product/
│
├── routes/
│   └── web.php
│
├── public/
├── storage/
├── composer.json
├── package.json
└── README.md
````

## Application Flow

The application follows the Laravel MVC structure:

```text
User
  ↓
Route
  ↓
Controller
  ↓
Model / Data / Form Request
  ↓
View
  ↓
Browser
```

For example:

```text
/products
    ↓
ProductController@index
    ↓
Product::all()
    ↓
product/index.blade.php
```

For a specific product:

```text
/products/1
    ↓
ProductController@show
    ↓
Product::findOrFail($id)
    ↓
product/show.blade.php
```

## Database

The application uses MySQL with the database:

```text
laravelcourse
```

The main tables are:

```text
users
products
comments
```

Products are managed through the `Product` Eloquent model:

```php
Product::all();
Product::findOrFail($id);
Product::create($request->only(["name", "price"]));
```

Comments are associated with products through `product_id`, allowing a product to have multiple comments.

## Validation

Product validation is handled through the dedicated `ProductRequest` class.

The price must be greater than zero:

```text
price → required|gt:0
```

This keeps validation logic separated from the controller.

## Factories and Seeders

The project uses Laravel factories and seeders to generate test data.

The database can be populated with:

```bash
php artisan db:seed
```

Product data is generated using `ProductFactory`, while users are generated using Laravel's `UserFactory`.

## Laravel Pint

Laravel Pint was used to maintain consistent PHP formatting:

```bash
vendor/bin/pint
```

## Installation

### Requirements

* PHP 8.3+
* Composer
* Laravel
* MySQL
* Node.js and npm
* phpMyAdmin

### Setup

Install dependencies:

```bash
composer install
npm install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure the MySQL database in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelcourse
DB_USERNAME=root
DB_PASSWORD=
```

Run migrations and seed the database:

```bash
php artisan migrate
php artisan db:seed
```

Start the application:

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

## Author

**Wendy Vanessa Atehortua Chaverra**

Universidad EAFIT

Laravel Tutorials

## Professor

**Daniel Correa Botero**
