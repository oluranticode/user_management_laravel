How to start this project:

### after cloning the code from github
1. The sql file is in the "db folder" name user_management.sql
2. upload the sql file in your mysql database
## run this command on your terminal
1. composer install
2. npm install
3. npm run dev
4. make copy of .env.example into .env and customize it with your database name :  cp .env.example .env
5. php artisan key:generate
6. php artisan migrate
7. php artisan serve