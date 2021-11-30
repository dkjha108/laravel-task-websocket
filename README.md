# laravel-task-websocket
Steps to setup code
1) Download code on local system
2) Configure .env file with db details.
3) Run commands:- composer install, php artisan migrate, php artisan serve, php artisan websockets:serve


Steps to check work:-

User can add tasks on the URL:- http://127.0.0.1:8000

Public listing using websockets showing on the URL:- http://127.0.0.1:8000/task-listing
