# Gestion des stagiaires

A Laravel web application for managing internship records. It provides CRUD workflows and a dashboard for organizing trainees and viewing basic totals by training track.

## Features
- List trainees and search by name, first name, email, school, or training track
- Create, edit, and delete trainee records
- Store contact and placement details: name, email, phone, school, track, start date, and end date
- Dashboard totals, including Full Stack, DEV, and other tracks
- Server-side validation for required fields, email format, and dates

## Tech stack
- PHP and Laravel
- Eloquent ORM
- Blade views
- Database migrations

## Local setup
1. Install PHP, Composer, a supported database, and Node.js/npm.
2. Install dependencies:

   ~~~bash
   composer install
   npm install
   ~~~

3. Copy .env.example to .env and configure the database. Then run:

   ~~~bash
   php artisan key:generate
   php artisan migrate
   npm run build
   php artisan serve
   ~~~

On Windows PowerShell, use Copy-Item .env.example .env for the copy step. Open the local URL printed by Artisan; the root route redirects to the trainee list.

## Main application files
- app/Models/Stagiaire.php — fillable trainee attributes
- app/Http/Controllers/StagiaireController.php — dashboard, search, validation, and CRUD actions
- routes/web.php — trainee resource routes and dashboard route
- resources/views/stagiaires/ — trainee list and create/edit screens
- database/migrations/ — schema

Never commit .env or credentials. Configure local settings in your own environment file.
