# Lara-Cinema

Field work practice report

## Requirements

1. PHP ^8.2
2. Composer
3. NPM

## How to clone

`$ git clone https://github.com/aalwf/bioskop-lara.git`

`$ cd bioskop-lara`

`$ composer install`

`$ npm install`

## After That

-   Rename the **.env.example** file to **.env**
-   Open your **.env** file

```bash
    DB_CONNECTION=sqlite
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=lara_cinema
    # DB_USERNAME=root
    # DB_PASSWORD=
```

-   remove ( **#** )

## Migrating

`$ php artisan migrate:fresh`
`$ php artisan db:seed MovieSeeder`

## Run Application

`$ php artisan ser`

-   Open New CMD Window

`$ cd C:/xampp/htdocs/bioskop-lara`
`$ npm run dev`

> [!NOTE]
> Place your Laravel application in the following path `C:/xampp/htdocs/` and turn on your web server and MySQL
