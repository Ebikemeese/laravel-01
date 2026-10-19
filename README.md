# FirstProject Laravel App

A simple Laravel application for managing blog posts with CRUD operations.

## Features

- View all posts
- Create a new post
- Edit an existing post
- Delete a post
- Form validation using Laravel request validation
- Blade-based UI for basic content management

## Tech Stack

- PHP 8+
- Laravel 9
- MySQL or SQLite for local development
- Blade templating

## Project Structure

- `app/Http/Controllers/PostController.php` – handles post CRUD actions
- `app/Models/Post.php` – Post Eloquent model
- `resources/views/posts/` – Blade views for list/create/edit screens
- `routes/web.php` – route definitions

## Getting Started

### Prerequisites

- PHP 8.0 or newer
- Composer
- A local database server such as MySQL or SQLite
- Laravel dependencies installed via Composer

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Ebikemeese/laravel-01.git
   cd laravel-01
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Copy the environment file and configure your database:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run database migrations:
   ```bash
   php artisan migrate
   ```

6. Start the application:
   ```bash
   php artisan serve
   ```

7. Open the application in your browser:
   ```text
   http://localhost:8000/posts
   ```

## Usage

The app exposes a resource route for posts:

- `GET /posts` – list all posts
- `GET /posts/create` – create a new post
- `POST /posts` – store a new post
- `GET /posts/{id}/edit` – edit a post
- `PUT /posts/{id}` – update a post
- `DELETE /posts/{id}` – delete a post

## License

This project is licensed under the [MIT License](LICENSE).
