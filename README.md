Table with php console and database
-----------------------
simple show data with php console and table
showing like this

| Name    | Email     | Phone
| :------------- | :------------- | :-------------
| Fendi       | fendi@email.com       | +62-9348-3434-3434

Instalation
-----------
__just clone this git__

```
git clone https://github.com/sm-alfariz/phpconsole-table-database.git
```

__dont forget__

for install library like sympony console and Eloquent library for database connection

```
composer update
```
and change config/app.yml for database configuration


__How to use?__

run from your console, for see list data of contacts

```php console.php contacts ```

Interactive php mode with psysh (like php artisan tinker)

```
php console.php interactive
```


__Todo__ :

* need some auth maybe
* not yet finnished for crud operation

just have fun for this simple example, more documentation
see below :

[sympony console](http://symfony.com/doc/current/components/console.html)


[laravel Eloquent](https://laravel.com/docs/5.3/eloquent)

some tricK (linux only):

* create symlink file to console.php  `ln -s console.php console` and add chmod to that file `chmod +x console` and now you can execute that file with command `./console`

Efendi Hariyadi
