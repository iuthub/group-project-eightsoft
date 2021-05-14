# Notes

- Create laravel project in PhpStorm: https://laraveldaily.com/phpstorm-easily-create-new-laravel-project/
- `php composer.phar create-project laravel/laravel MyProject`
- `php artisan serve` to run the project
- `php composer.phar update`
- `php artisan key:generate`
- `php artisan config:cache`

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

- Second way
    - Installing Node and NPM on M1, https://www.youtube.com/watch?v=FzTjV0O88qM
    - Uninstalling Node, https://stackabuse.com/how-to-uninstall-node-js-from-mac-osx/
    - `php composer require laravel/ui` will install bootstrap too
    - `php artisan ui vue --auth`
    - `npm install` and `npm run dev`, maybe `npm audit fix` if ERR occured


## Models / Migrations 
