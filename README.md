
# Development of an Online Store Using Laravel

## Description

This project is a basic online store developed using Laravel. It was created as part of Tutorial Laravel 1 at Universidad EAFIT.

The project demonstrates the basic structure and functionality of a Laravel web application, including routes, controllers, Blade views, reusable layouts, form validation, conditional rendering, and redirections.

## Features

- Home page.
- About page.
- Contact page.
- Products page with a list of products.
- Product detail page.
- Product creation form.
- Product price validation.
- Validation to ensure that product prices are greater than zero.
- Redirection to the Home page when an invalid product ID is entered.
- Conditional formatting of product names based on their price.
- Success page after submitting valid product information.
- Reusable layout using Blade.
- Bootstrap styling.

## Technologies

- PHP 8.3+
- Laravel 13
- Blade
- Bootstrap 5
- SQLite

## Project Structure

```text
laravelcourse/
│
├── app/
│   └── Http/
│       └── Controllers/
│           ├── Controller.php
│           ├── HomeController.php
│           ├── ContactController.php
│           └── ProductController.php
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── home/
│       │   ├── index.blade.php
│       │   ├── about.blade.php
│       │   └── contact.blade.php
│       │
│       └── product/
│           ├── index.blade.php
│           ├── show.blade.php
│           ├── create.blade.php
│           └── success.blade.php
│
├── routes/
│   └── web.php
│
├── public/
│
├── storage/
│
├── vendor/
│
├── composer.json
└── README.md


## Application Flow

The application follows the basic Laravel MVC structure:

```text
User
  ↓
Route
  ↓
Controller
  ↓
View
  ↓
Browser
```

For example, when accessing the Products page:

```text
/products
    ↓
ProductController@index
    ↓
product/index.blade.php
```

When accessing a specific product:

```text
/products/1
    ↓
ProductController@show
    ↓
product/show.blade.php
```

## Routes

The main routes of the application are:

| Method | URL                | Route Name       | Description                        |
| ------ | ------------------ | ---------------- | ---------------------------------- |
| GET    | `/`                | `home.index`     | Displays the Home page             |
| GET    | `/about`           | `home.about`     | Displays the About page            |
| GET    | `/contact`         | `home.contact`   | Displays the Contact page          |
| GET    | `/products`        | `product.index`  | Displays the list of products      |
| GET    | `/products/{id}`   | `product.show`   | Displays a specific product        |
| GET    | `/products/create` | `product.create` | Displays the product creation form |

## Products

The products used in the application are currently defined as a static array inside `ProductController`.

Example:

```php
public static $products = [
    [
        "id" => "1",
        "name" => "TV",
        "description" => "Best TV",
        "price" => 3500000
    ],
    [
        "id" => "2",
        "name" => "iPhone",
        "description" => "Best iPhone",
        "price" => 7000000
    ],
    [
        "id" => "3",
        "name" => "Chromecast",
        "description" => "Best Chromecast",
        "price" => 200000
    ],
    [
        "id" => "4",
        "name" => "Glasses",
        "description" => "Best Glasses",
        "price" => 500000
    ]
];
```

These products are used to demonstrate how controllers can send data to Blade views.

## Product Validation

The product creation form uses Laravel's built-in validation system.

The product name is required, and the price must be provided and must be greater than zero.

```php
$request->validate([
    "name" => "required",
    "price" => "required|gt:0"
]);
```

The `gt:0` rule means that the price must be greater than zero.

Therefore:

```text
100   → Valid
1     → Valid
0     → Invalid
-50   → Invalid
Empty → Invalid
```

No manual `if` statement is required for this validation.

## Product Creation

The product creation process is handled by the `create` and `save` methods in `ProductController`.

The `create` method displays the form:

```php
public function create(): View
{
    $viewData = [];
    $viewData["title"] = "Create product";

    return view('product.create')->with("viewData", $viewData);
}
```

The `save` method validates the submitted information:

```php
public function save(Request $request)
{
    $request->validate([
        "name" => "required",
        "price" => "required|gt:0"
    ]);

    return view('product.success');
}
```

If the information is valid, the user is redirected to the success view, which displays:

```text
Product created successfully!
```

## Invalid Product IDs

The `show` method checks whether the requested product exists.

If an invalid product ID is entered, such as:

```text
/products/100
```

the application redirects the user to the Home page.

The redirection uses the named route:

```php
return redirect()->route('home.index');
```

The method can therefore return either a view or a redirect response:

```php
public function show(string $id): View | \Illuminate\Http\RedirectResponse
```

## Conditional Product Display

The product detail view uses a Blade conditional to change the appearance of the product name depending on its price.

If the price is greater than 80, the product name is displayed in red:

```php
@if ($viewData["product"]["price"] > 80)
    <h5 class="card-title text-danger">
        {{ $viewData["product"]["name"] }}
    </h5>
@else
    <h5 class="card-title">
        {{ $viewData["product"]["name"] }}
    </h5>
@endif
```

The condition is implemented in the Blade view because it controls how the information is presented to the user.

## Blade Layout

The application uses a reusable Blade layout located at:

```text
resources/views/layouts/app.blade.php
```

The layout contains common elements such as:

* Navigation bar.
* Header.
* Content section.
* Footer.
* Bootstrap resources.

Individual views extend this layout using:

```php
@extends('layouts.app')
```

Sections are defined using:

```php
@section('title', 'Page Title')
```

```php
@section('subtitle', 'Page Subtitle')
```

and:

```php
@section('content')
    ...
@endsection
```

The layout displays these sections using Blade's `@yield` directive.

## Navigation Menu

The navigation menu contains links to the main pages of the application:

```text
Home
About
Contact
Products
```

Named routes are used to generate the URLs:

```php
route('home.index')
route('home.about')
route('home.contact')
route('product.index')
```

For example:

```php
<a class="nav-link active" href="{{ route('product.index') }}">
    Products
</a>
```

## Debugging

During development, Laravel's `dd()` function was used to inspect submitted form data.

For example:

```php
dd($request->all());
```

`dd()` means "Dump and Die". It displays the contents of the variable and stops the execution of the application.

It was useful for checking the information received from the product creation form. Once the information was verified, the `dd()` statement was removed and replaced with the success view.

## Installation

### Requirements

Before running the project, make sure the following are installed:

* PHP
* Composer
* Laravel
* A web browser

### Create the Project

The Laravel project was initially created using:

```bash
composer create-project laravel/laravel laravelcourse "13.*" --prefer-dist
```

Then, enter the project directory:

```bash
cd laravelcourse
```

### Run the Application

Start the Laravel development server:

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

Tutorial Laravel 1

## Professor

**Daniel Correa Botero**

```
```
