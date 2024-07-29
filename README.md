# API Monster Authentication
Modern Authentication Routes and Models for API-Monster

## Project Overview Video (Persian)

<video width="320" height="240" controls>
  <source src="https://grammyjsbot.github.io/api-monster.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>


## Features

1. **.htaccess Fixes**
   - Ensure safe routes and PHP file accessibility.

2. **Database Connection Details**
   - Configuration settings for database connectivity.
   - Add the following to your `.env` file:
     ```plaintext
     # Database Connection
     DB_HOST=localhost
     DB_PORT=3306
     DB_NAME=ferland
     DB_USER=root
     DB_PASSWORD=
     ```

3. **User Model**
   - Defined in `App\Models\Db\User.php`.

4. **Authentication Models**
   - `App\Models\Auth\Auth.php`
   - `App\Models\Auth\Update.php`
   - `App\Models\Auth\Register.php`
   - `App\Models\Auth\Login.php`

5. **API File and Example Usage Models**
   - Located in `App\Controllers\ApiController.php`.

6. **Routes**
   - Defined in `routes\web.php`.

7. **Views**
   - Main index: `views\index.php`
   - Authentication views:
     - Login: `views\auth\login.php`
     - Register: `views\auth\register.php`

8. **Database Table Code**
   - Example SQL code for creating the `users` table:
     ```sql
     CREATE TABLE `users` (
         `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
         `name` VARCHAR(255) NOT NULL,
         `email` VARCHAR(255) NOT NULL UNIQUE,
         `password` VARCHAR(255) NOT NULL,
         `role` TINYINT(1) DEFAULT 0,
         `token` VARCHAR(255) DEFAULT NULL,
         `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
         `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
     );
     ```
   - Located in `tests\01-tables.sql`.

9. **Controllers**
   - Login and Register: `App\Controllers\AuthController.php`
   - User Dashboard: `App\Controllers\HomeController.php`

## Tests
- Implement tests to help request to APIs.

## Views and Controllers

### Login and Register Page Controller
- `App\Controllers\AuthController.php`

### User Dashboard Controller
- `App\Controllers\HomeController.php`

## API Monster Documentation

Welcome to the API-Monster documentation! Here you will find detailed information on how to use and extend the API-Monster PHP framework for building powerful APIs.

You can access the full documentation at [API-Monster Wiki](https://github.com/ReactMVC/API-Monster/wiki).

## Developer Information

API-Monster is developed by Hossein Pira. For any inquiries or support, you can reach out to the developer via the following channels:

- **Email:** h3dev.pira@gmail.com
- **Telegram:** @h3dev
