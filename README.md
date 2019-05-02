# laravel-composer-package
This is a demo composer package for Laravel. It will show you how to add views, routes and even an `artisan` command.

## Installation

Just require the package in your Laravel app:

<pre>
composer require <b>janole/laravel-composer-package</b>
</pre>

Now you will have a new `artisan` command:

<pre>
$ php artisan <b>demo:command</b>
Hello, world!
</pre>

And there will be some demo routes as well:

```
$ php artisan route:list
+--------+----------+-----------+------+---------+--------------+
| Domain | Method   | URI       | Name | Action  | Middleware   |
+--------+----------+-----------+------+---------+--------------+
|        | GET|HEAD | /         |      | Closure | web          |
|        | GET|HEAD | api/v1/me |      | Closure | api          |
|        | GET|HEAD | hello     |      | Closure |              |
|        | GET|HEAD | me        |      | Closure | web          |
+--------+----------+-----------+------+---------+--------------+
```

## How does this work? (... is it magic? ... no!)

First, you need to register your package with Laravel.

Just extend an `Illuminate\Support\ServiceProvider` class and add it to an `extra -> laravel -> providers` block in the **composer.json** package description file:

```
{
    "name": "janole/laravel-composer-package",
    "type": "project",
    "description": "Just a demo composer package for Laravel ...",
    ...
    "extra": {
        "laravel": {
            "providers": [
                "janole\\Demo\\PackageServiceProvider"
            ]
        }
    }
}
```

#### Inside of the `PackageServiceProvider`

Use the `boot()` function of the extended provider class to register commands, routes or views:

```php
class PackageServiceProvider extends ServiceProvider
{
    ...

    public function boot()
    {
        // Register an artisan command ... (php artisan demo:command)
        $this->commands([\janole\Demo\Console\Commands\DemoCommand::class]);

        // Register some demo routes
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');

        // Register some demo views
        // (use them with the corresponding prefix like: @include("demo-views::the-view-name"))
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'demo-views');
    }
}
```

## Using the views

When registering views, you can specify a **prefix**:

```php
$this->loadViewsFrom(__DIR__.'/../resources/views', 'prefix');
```

Now, you can simply start using the views (_Blade Templates_) in your **Laravel** app like this:

```blade
@include("prefix::the-view-name", ...)
```

## References

- [Laravel Package Development](https://laravel.com/docs/5.8/packages) from the official Laravel documentation

- [Laravel Package Development Basics](https://pineco.de/laravel-package-development-basics/) from Pineco.de
