# Gestion des stagiaires

A Laravel web application for managing internship records, with searchable trainee records, CRUD workflows, and a dashboard summarizing trainees by training track.

## Overview

The application is designed for a training or internship coordinator to maintain trainee contact and placement details in one place.

## User Roles

- **Admin / coordinator:** Operates the application and manages trainee records through the CRUD interface.
- **User / trainee:** A record in the system, not a separate authenticated account. Authentication and role-based access are not implemented in this project.

## Key Features

- Search trainees by name, first name, email, school, or training track
- Create, edit, and delete trainee records
- Store email, phone, school, track, start date, and end date
- Dashboard totals for Full Stack, DEV, and other tracks
- Server-side validation for required fields, email format, and dates
- Seeder with 10 sample trainee records for local demonstration

## Tech Stack

- PHP, Laravel, Eloquent ORM
- Blade views and database migrations
- MySQL-compatible database
- Vite / frontend assets

## Local Setup

1. Install PHP, Composer, a supported database, and Node.js/npm.
2. Install dependencies:

   ```bash
   composer install
   npm install
   ```

3. Copy `.env.example` to `.env` and configure your database connection. Then generate the application key:

   ```bash
   php artisan key:generate
   ```

4. Create the database and run migrations with sample data:

   ```bash
   php artisan migrate --seed
   ```

5. Build frontend assets and start the development server:

   ```bash
   npm run build
   php artisan serve
   ```

On Windows PowerShell, copy the environment template with `Copy-Item .env.example .env`. Open the local URL printed by Artisan.

## Screenshots

The three requested screenshots (Table + Search, Dashboard Chart.js, and Add/Edit Form) will be added from the correct application demo recording.

## What I Learned

- Building Laravel CRUD workflows with Eloquent and server-side validation
- Designing migrations and keeping seeded data consistent with the schema
- Implementing search and aggregate dashboard queries
- Organizing Blade views and local setup documentation

Never commit `.env` or credentials.
