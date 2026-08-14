# Authentication

A Laravel-based authentication project that implements a complete user authentication flow, including registration, login, logout, and password recovery.

## Features

- **Sign Up** — Create a new user account.
- **Log In** — Authenticate users and access the application.
- **Forgot Password** — Request a password reset.
- **Password Reset Email** — Send a password reset email to the user.
- **Log Out** — Securely log out from the application.

## Built With

- **Laravel**
- **PHP**
- **MySQL**
- **Blade**
- **HTML / CSS / JavaScript**

## Project Development

This project was developed as a Laravel authentication mini-project.

The **backend and authentication logic were developed by me**, including the authentication flow, validation, database interactions, and password recovery functionality.

The **frontend/UI was developed with the assistance of AI tools**.

## Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/Hassanzz23/Authentication.git
```

Navigate to the project directory:

```bash
cd Authentication
```

### 2. Install PHP dependencies

Make sure you have PHP and Composer installed, then run:

```bash
composer install
```

### 3. Create the environment file

Copy the example environment file:

```bash
cp .env.example .env
```

On Windows, you can also simply copy `.env.example` and rename it to `.env`.

### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Configure the database

Open the `.env` file and configure your database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Create the database in MySQL before running the migrations.

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Configure email

The password reset functionality requires mail configuration.

Update the mail settings in your `.env` file according to your email provider:

```env
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email
MAIL_FROM_NAME="${APP_NAME}"
```

> Do not commit your `.env` file or real email credentials to GitHub.

### 8. Run the application

Start the Laravel development server:

```bash
php artisan serve
```

Then open the URL shown in the terminal, usually:

```text
http://127.0.0.1:8000
```

## Authentication Flow

The application provides the following authentication flow:

```text
Sign Up
   ↓
Create Account
   ↓
Log In
   ↓
Authenticated User
   ↓
Log Out
```

For users who forget their password:

```text
Forgot Password
   ↓
Enter Email
   ↓
Receive Reset Password Email
   ↓
Reset Password
```

## Project Structure

The project follows the standard Laravel application structure:

```text
Authentication/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── README.md
```

## Author

**Hassanzz23**

GitHub: [Hassanzz23](https://github.com/Hassanzz23)

## License

This project is created as a learning and portfolio project.