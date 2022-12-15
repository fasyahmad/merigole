seting database di .evn dan APP_URL
instal jetstream
instal yajra dataTable

bikin model
php artisan make:model Catalog
nambahin field baru ke dataTable
- php artisan make:migration add_field_to_users --table=users
create table
- php artisan make:migration create_galleries_table --create=galleries
create API controller
- php artisan make:controller API\Gallery
create controller wirh source
-php artisan make:controller UserController --resource --model=User