# Mini-CRM

## Introduction

Simple Customer Relationship Management (CRM) system built with Laravel 10 and Laravel Breeze. It features basic user authentication and role-based authorization. The admin panel allows for the management of users and roles.

## Features

- User Authentication (via Laravel Breeze)
- Role-based Authorization
- Admin Panel
    - Manage Users
    - Manage Roles

## Installation

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js and npm
- A web server (e.g., Apache, Nginx)
- A SQL database (e.g., MySQL, SQLite)

### Steps

1. Clone the repository:

    ```bash
    git clone https://github.com/andrewchuev/laravel_rlcrm.git
    ```

2. Navigate into the project directory:

    ```bash
    cd laravel_rlcrm
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Install JavaScript dependencies:

    ```bash
    npm install
    ```

5. Compile assets:

    ```bash
    npm run dev
    ```

6. Create a `.env` file:

    ```bash
    cp .env.example .env
    ```

7. Generate an application key:

    ```bash
    php artisan key:generate
    ```

8. Update the `.env` file with your database credentials.

9. Run the database migrations:

    ```bash
    php artisan migrate
    ```

10. Seed the database with roles (optional):

    ```bash
    php artisan db:seed --class=RoleSeeder
    ```

11. Run the application:

    ```bash
    php artisan serve
    ```

## Usage

1. Register a new user account or log in.
2. If seeded, log in as an admin to access the admin panel.
3. Use the admin panel to manage users and roles.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
