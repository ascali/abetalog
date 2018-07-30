# a beta log!
This web is simple blog to explore using rest full api with lumen

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
   ```php
	<?php
	use Illuminate\Database\Seeder;
	use Illuminate\Database\Eloquent\Model;
	class SeederName extends Seeder {
	    public function run()
	    {
	        DB::table('seeder_tables')->delete();
	        $category = app()->make('App\ModelSeeder');
	        $category->fill(['name' => 'test seeder']);
	        $category->save();
	    }
	}
   ```
2. ``` composer dump-autoload ```
3. ``` php artisan migrate:refresh --seed ```

## Set up .env
``` 
APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:JHdpwwjAk2lQxJtLfvoLxy8D2vQZW8ats0GEYF9GuLaCY=
APP_TIMEZONE=UTC

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=abetalog
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=array
SESSION_DRIVER=array
QUEUE_DRIVER=array
```

## Set up db heroku
```

heroku config:set APP_ENV=production APP_KEY=base64 APP_DEBUG=false APP_LOG=errorlog DB_CONNECTION=mysql DB_HOST=dbhost DB_PORT=3306 DB_DATABASE=dbname DB_USERNAME=dbusername DB_PASSWORD=dbpass CACHE_DRIVER=array SESSION_DRIVER=array QUEUE_DRIVER=array
```
## Feel Free to update ...