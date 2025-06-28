# Job Application Tracker

A full-stack Laravel application to help users track job applications throughout their job search. It includes features like authentication, CRUD functionality, status tracking, and analytics.

## 🚀 Features

- User Registration & Login (Laravel Breeze or Jetstream)
- Add / Edit / Delete job applications
- Track application status (Applied, Interview, Offer, Rejected)
- Search and filter jobs
- Follow-up reminders (date-based)
- Status dashboard with Chart.js visualizations
- Responsive UI using Blade & Bootstrap

## 🛠️ Built With

- Laravel 11
- MySQL
- Blade Templating Engine
- Bootstrap (or Tailwind CSS)
- Chart.js
- Git + GitHub

## 📦 Installation

```bash
git clone https://github.com/your-username/job-application-tracker.git
cd job-application-tracker
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
