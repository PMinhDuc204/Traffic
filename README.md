# go to project

* node version  > 20 
* php version  > 8.2 

# run backend
$ cd backend 

$ composer install

$ cp .env.example .env

# edit database in .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tranffic
DB_USERNAME=root
DB_PASSWORD=

$ php artisan key:generate

$ php artisan migrate

$ php artisan db:seed

$ php artisan serve

# run frontend

$ cd frontend 

$ npm install or yarn install

$ npm run dev