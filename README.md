# Installation

## Setup this repository first

Usage

```bash
git clone https://github.com/anaksuwung25/wedding.git
cd wedding-invitation
```

## Setup Laravel Packages and Migrations

### Make sure you do this before setup on bash

-   PHP version is on version 8
-   .env File is available or exists
-   Change database config on .env file
-   Composer installed

### Bash Usage

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install && npm run dev
php artisan migrate:fresh --seed
php artisan serve
php artisan storage:link
```
### login

```bash
http://wedding-invitation.test/admin
E : valupi@gmail.com
P : 123qweasd
```
