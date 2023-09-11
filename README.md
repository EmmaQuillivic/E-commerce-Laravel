# E-Commerce Laravel Project

Creation of a bucket hat sales website in Laravel 8.12.

## What's Inside?

Here's what you'll find in this project:

### Shopping Cart

I've implemented a shopping cart feature that lets users add products to their cart as they shop. You can easily view and manage your cart before making a purchase.

### AJAX Integration

To enhance the user experience, I've integrated AJAX functionality into the project. AJAX allows for seamless updates on the site without the need for page reloading. For example, you'll see AJAX in action when updating cart contents or refreshing site statistics in the admin section.

### Cookie Consent

In compliance with the General Data Protection Regulation (GDPR), I've added a cookie consent popup. It gives users the option to grant or deny consent for the use of cookies. The project manages a "check_popup" cookie to control the display of the popup.

### Admin Dashboard

I've created an admin section where you can manage your e-commerce site efficiently. It includes features such as tracking active users, monitoring order statistics, and more.

## Project Structure

Let me give you a quick tour of how this project is organized:

```bash
/laravel
    ├── app/                 # Where the magic happens
    ├── config/              # Configuration files
    ├── database/            # Database migrations and seeds
    ├── public/              # Assets like CSS, JS, and images
    ├── resources/           # Views, sass and other resources
    ├── routes/              # Definitions for routes
    ├── tests/               # Test cases
    └── ...                  # Other project directories/files
```

## Prerequisites

Before you begin, ensure you have met the following requirements:

- [PHP](https://php.net) (>= 7.3 or >= 8.0)
- [Composer](https://getcomposer.org) (for PHP dependency management)
- [Node.js](https://nodejs.org) (for asset compilation)
- [NPM](https://www.npmjs.com) (or Yarn) (for managing JavaScript dependencies)
- [MySQL](https://www.mysql.com) (or your preferred database system)

## Installation

To get this project up and running on your local machine, here's what you need to do:

1. Clone the repository: `git clone https://github.com/EmmaQuillivic/E-commerce-Laravel.git`
2. Move to the project directory: `cd E-commerce-Laravel/laravel/`
3. Install PHP dependencies: `composer install`
4. Create a copy of the `.env` file: `cp .env.example .env`
5. Generate an application key: `php artisan key:generate`
6. Run database migrations: `php artisan migrate`
7. Install JavaScript dependencies: `npm install`
8. Compile assets: `npm run dev`

## How to Use

Using my website is super easy. Just follow these steps:

1. Start the Laravel development server: `php artisan serve`
2. Open your web browser and go to `http://localhost:8000`

That's it! You can now explore the website, create an account, add products to your cart, and even make purchases.
