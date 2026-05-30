# Medical Desk

A Laravel and Livewire booking form for medical test appointments.

## Features

- Medical test booking form
- Date and time selection
- Location selection
- Personal data form
- Receipt/invoice information form
- Payment method layout
- Server-side validation
- Database storage using Laravel models
- Livewire reusable components

## Technologies Used

- PHP
- Laravel
- Livewire
- Blade
- MySQL
- Tailwind CSS

## Main Files

- routes/web.php
- app/Http/Controllers/DatianagraficiController.php
- resources/views/home.blade.php
- resources/views/livewire

## Notes

This project was built as a Laravel-based booking form with multi-section form handling and database persistence.

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
