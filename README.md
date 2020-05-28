Clone product from github

1. Go to config/app.php set 'timezone' => 'Asia/Ho_Chi_Minh'

2. Go to config/database.php, config your db info (from line 36)

            

3. Go to the application folder using cd command on your cmd or terminal, run "$ composer install" on your cmd or terminal.

4. Copy .env.example file to .env on the root folder. You can type copy "$ .env.example .env" if using command prompt Windows or "$ cp .env.example .env" if using terminal, Ubuntu.

5. Open your .env file -> config your db info (from line 9)

6. Run following commands from project root folder
* php artisan key:generate
* php artisan migrate
* composer dump-autoload
* php artisan serve
7. Go to localhost:8000
8. Seeding data: Run following commands from project root folder

composer dump-autoload
php artisan db:seed

See more: https://laravel.com/docs/6.x/seeding
-----------------------------------

Deploy Laravel project to Heroku: https://viblo.asia/p/huong-dan-deploy-project-laravel-cua-ban-len-heroku-maGK7WRbKj2