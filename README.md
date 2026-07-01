# Laravel Job Board

This is a small Laravel job board application for creating, browsing, editing, and deleting job listings. Users can register, log in, create their own job posts, and manage only the listings that belong to their account.

## Features

- User registration, login, and logout
- Job listing index with pagination
- Create, view, edit, and delete job posts
- Authorization for editing and deleting only your own jobs
- Job title, salary, and job details fields
- Light and dark mode toggle
- Responsive navigation and Tailwind CSS styling

## Tech Stack

- Laravel
- Blade
- Tailwind CSS v4
- Vite
- SQLite or any Laravel-supported database

## Local Setup

Install PHP dependencies:

```bash
composer install
```

Install JavaScript dependencies:

```bash
npm install
```

Copy the environment file and generate an app key:

```bash
cp .env.example .env
php artisan key:generate
```

Run database migrations:

```bash
php artisan migrate
```

Start the Laravel server:

```bash
php artisan serve
```

Start Vite:

```bash
npm run dev
```

For a production build:

```bash
npm run build
```
