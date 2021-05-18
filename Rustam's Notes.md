# Notes

- Create laravel project in PhpStorm: https://laraveldaily.com/phpstorm-easily-create-new-laravel-project/
- `php composer.phar create-project laravel/laravel MyProject`
- `php artisan serve` to run the project
- `php composer.phar update`
- `php artisan key:generate`
- `php artisan config:cache`

## Important commands
- `php artisan list`
- `php artisan help migrate`
- `php artisan make:controller NewCotroller`
- `php artisan make:model NewModel -m`
- `php artisan migrate`
- `php artisan tinker` // to use DB from terminal
- `php artisan route:list`

## References
- https://stackoverflow.com/questions/44839648/no-application-encryption-key-has-been-specified
- `rm -rf .git` remove .git folder

## Laravel structure
- MVC - model, view, controller. In Django, we have MVT (model, view, template)
- Models - in the **app** folder, used for database purpose
- Views - HTML rendered templates, in the **resources/views**, blade.php
- Controller - in the **app/Http/Controllers** folder, the main logic of app, it retrieves data from models and renders views, it can also send the parameters to the **blade.php**
- Routes - urls, in the **routes/web.php**

## Routes
- First of all, everything will be handled in the **routes/web.php**, the code below will show "Hello World" in browser
    ```php
    Route::get('/', function () {
        // return view('welcome');
        return "<h1>Hello World</h1>";
    });
    ```
- If you are trying to submit a form change `get` into `post`
- Go and create **about.blade.php** inside **views/pages** and write anything
    ```php
    Route::get ('/about', function () {
    return view('pages.about');
    });
    ```
- Then the route will redirect to the `blade.php` file specified
- *What if you want to submit a dynamic value in your request?*
    ```php
    Route::get ('/users/{id}', function ($id) {
    return "This is a user " . $id;
    });
    ```

## Controllers
- **app/Http/Controllers** 
- `php artisan make:controller MyController`
- `php artisan make:controller MyController --resource `
- Any controller should extend the **Controller** class, inside our class we can create methods
- **index** method returns the html template which is **resources/views/pages/index.blade.php**
    ```php
    // App/Http/Controllers/PagesController.php
    class PagesController extends Controller {
        public function index() {
             return view('pages.index');
        }
    }
    ```
- Then in the **routes/web.php**, connect **index** method of **PagesController** class
    ```php
    Route::get('/', 'App\Http\Controllers\PagesController@index');
    ```
- Now you can create as many methods inside the **PagesController** class, and don't forget to specify them in routes 

## Blade Templates, Views
- Create main html template with `@yield('content')`
- Then in other html files inherit it using:
    ```html
    @extends('layouts.app')
    
    @section('content')
        <h1>Welcome!</h1>
    @endsection
    ```
- How to pass the parameters from controller?
    ```php
    public function index() {
        $title = "Welcome to our blog!";
        return view('pages.index', compact("title")); 
        // OR return view('pages.index')->with('title', $title); 
    }
    ```
    ```html
    <h3>{{ $title }}</h3>
    ```

## Authentication / Authorization
- Create MySQL database and update the info
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```
- php composer.phar require laravel/breeze --dev
- php artisan breeze:install
- npm install # front-end
- npm run dev
- php artisan migrate

- Second way (working)
    - Installing Node and NPM on M1, https://www.youtube.com/watch?v=FzTjV0O88qM
    - Uninstalling Node, https://stackabuse.com/how-to-uninstall-node-js-from-mac-osx/
    - `php composer.phar require laravel/ui` will install bootstrap too
    - `php artisan ui vue --auth`
    - `npm install` and `npm run dev`, maybe `npm audit fix` if ERR occured
    
## Models / DB Migrations 
- Create MySQL database in PhpAdmin, called **eightsoft**
- `php artisan make:controller NewController`
- `php artisan make:model Post -m`, this will create a migration in **database/migrations**
- In the **up()** function you need to define your columns of table
    ```php
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('body');
            $table->dateTime('created_time');
            $table->timestamps();
        });
    }
    ```
- Then type `php artisan migrate` to apply the changes in database
- ERROR time, here we go:
- https://stackoverflow.com/questions/51249164/php-artisan-migrate-error-illuminate-database-queryexception-sqlstatehy00
- Now changing **config/database.php**
- `php artisan config:clear`, `php artisan migrate:install`
- Ughh progress, new type of error:
```
  SQLSTATE[HY000] [2002] Connection refused (SQL: create table `migrations` (`id` int unsigned not null auto_increment primary key, `migration` varchar(191) not null, `batch` int not null) default character set utf8 collate 'utf8_unicode_ci') 
```
- Ok that's shit not working

- `php artisan tinker`, you can directly work with models and database
```php 
>>> App\Post::count()
>>> $post = new App\Post; // instanse of our post model
>>> $post->title = 'Post One`;
>>> $post->body = `This is the post body`;
>>> $post->save();
```

## TODO for others
- Go and create `eightsoft` called database inside your PhpAdmin
- [Authentication instructions](#Authentication-/-Authorization)
- `php artisan migrate`
- https://laravelcollective.com/docs/6.x/html
  `php composer.phar require laravelcollective/html`
  
- `php artisan make:migration add_user_id_to_posts`
- `php artisan migrate` 


 ## TODO after Vladimir and Irina changes
 - `php artisan migrate` 
 - `php artisan storage:link`
 - Upload any image with `noimage.jpg` filiname into **storage/app/public/cover_images**

- https://stackoverflow.com/questions/33988896/where-to-put-css-file-in-laravel-project
- Override CSS https://stackoverflow.com/questions/40953996/laravel-makeauth-css-stylesheet/55648693
