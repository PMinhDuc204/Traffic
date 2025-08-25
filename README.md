// node version  > 20 
// php version  > 8.2 

// run backend
$ cd backend composer install

$ cp .env.example .env

$ php artisan key:generate

$ php artisan migrate

$ php artisan serve

// run frontend

$ cd frontend npm install

$ npm run dev