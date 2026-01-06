🚀 Installation Guide
Follow these steps to get your local copy of SocialSP up and running:

Clone the repository:

Bash

git clone https://github.com/TU_USUARIO/socialsp.git
cd socialsp
Install PHP dependencies:

Bash

composer install
Install and compile assets:

Bash

nvm use 22
npm install
npm run build
Setup Environment:

Copy .env.example to .env.

Create a MySQL database named socialsp.

Configure DB_USERNAME and DB_PASSWORD in your .env.

Generate App Key and Migrate:

Bash

php artisan key:generate
php artisan migrate
php artisan storage:link
Create Admin User (for /admin panel):

Bash

php artisan make:filament-user
Start the server:

Bash

php artisan serve
Visit: http://127.0.0.1:8000🚀 Installation Guide
Follow these steps to get your local copy of SocialSP up and running:

Clone the repository:

Bash

git clone https://github.com/TU_USUARIO/socialsp.git
cd socialsp
Install PHP dependencies:

Bash

composer install
Install and compile assets:

Bash

nvm use 22
npm install
npm run build
Setup Environment:

Copy .env.example to .env.

Create a MySQL database named socialsp.

Configure DB_USERNAME and DB_PASSWORD in your .env.

Generate App Key and Migrate:

Bash

php artisan key:generate
php artisan migrate
php artisan storage:link
Create Admin User (for /admin panel):

Bash

php artisan make:filament-user
Start the server:

Bash

php artisan serve
Visit: http://127.0.0.1:8000
