
# :trident: :octocat: How to lumen :cyclone: :banana: :full_moon: :earth_asia: :four_leaf_clover: :cat2:

## To run app
1. open cmd/terminal move to project folder
2. ``` php -S localhost:port -t public ```

## To create new table
1. ``` php artisan make:migration create_tables_name_table --create=table_name ```
2. create model on app/TableName.php
3. ``` php artisan migrate ```

## To run seeder 
1. create seeder on seeds/SeederName.php
2. ``` composer dump-autoload ```
3. ``` php artisan migrate:refresh --seed ```