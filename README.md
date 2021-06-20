![curriculum-vitae (1)](https://user-images.githubusercontent.com/33894327/120533136-b4e61400-c3e0-11eb-8565-0b6f410bc574.png)

## CV-MAKER

### Description
I created this web application for manage and create your own resumes. This version still in development so if you find any problems or suggest you can contact me here luiscm4c@gmail.com.
###### Thank you for your time :)

## Before start:
Follow this steps for install the project.
### 1. Clone the repository.
then `cd cv-maker`

### 2. Install Laravel.
You can install Laravel here https://laravel.com/docs/7.x/installation.

### 3. Install Composer.
run   `composer install` command.

### 4. Create .ENV file.
`cp .env.example .env`

### 5. Configure local database
you have to create a database named laravel in your XAMP/WAMP server.
<blockquote>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=your database username
DB_PASSWORD= your database password
</blockquote>

###  5. Generate the project key.
`php artisan key:generate`

###  6. Run migrations.
`php artisan migrate`

### 7. Last step, run the server.
`php artisan serve`