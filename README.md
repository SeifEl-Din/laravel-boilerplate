# Laravel Boilerplate

This project is a Laravel Boilerplate application that includes user profile picture management and an admin dashboard.

## Features

1. **Profile Picture Upload:**
   - Users can upload a profile picture during registration.
   - Users can update their profile picture later.
   - The user's profile picture is displayed on their profile page.

2. **Admin Dashboard:**
   - Admins can access a dashboard to view:
   - Count of all users.
   - A bar chart showing users registered by date (X axis as date, Y axis as count).


## Installation
1. **Clone the repository:**
    - git clone https://github.com/SeifEl-Din/laravel-boilerplate

2. **Open the directory in a CMD**

3. **Start XAMPP:**
    - Open XAMPP to launch apache and MySQL

4. **Install any needed dependencies:**
    - composer install
    - npm install

5. **Setup a .env file:**
    - copy .env.example .env

6. **Edit the created .env file:**
    - Edit the smtp mail service that you will use in confirming registrations.
    - Edit the database section with the MySQL database name you will be using.

7. **Generate application key:**
    - php artisan key:generate

8. **Migrate to new database:**
    - php artisan migrate
      
9. **Populate database with two types of users:**
    - php artisan db:seed
      
10. **Run the server:**
    - php artisan serve


## Usage

**User profile picture change:**
- Visit '/register' to register a new user. You can now upload a new profile picture.
- After logging in, visit '/profile' to update the user's profile picture.

**Admin dashboard:**
- Visit '/admin/dashboard' to access the admin's dashboard.
- You can now see how many users are stored in the database and their date of registration.
