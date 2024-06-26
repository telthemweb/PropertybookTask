# PROPERTYBOOK TECHNICAL TASK 2024

AUTHOR: INNOCENT TAUZENI

## Deployment Instructions

### Prerequisites

- **PHP** >= 8.1
- **Composer** (dependency manager)
- **MySQL** or another supported database
- **Node.js** and **npm** (for frontend assets)

### Steps to Deploy

1. **Clone the repository:**
   ```bash
   git clone https://github.com/telthemweb/PropertybookTask.git


cd PropertybookTask
## Install PHP dependencies:
 ```bash
  composer install

## Install Node.js dependencies:
 ```bash
 npm install
 npm run build

## Set up environment variables:
Create a copy of the .env.example file and rename it to .env:
```bash
cp .env.example .env

Update the .env file with your database credentials and other necessary configuration.
NB Make sure you create the database name specified in the .env file.

## Generate the application key:
```bash
php artisan key:generate

## Run database migrations:
```bash
php artisan migrate

## Run database seeders
```bash
php artisan db:seed


## Run the application:
```bash
php artisan serve

### TAKE THIS LINK

```bash
http://127.0.0.1:8000

## Login To Admin Panel
```bash
http://127.0.0.1:8000/login



