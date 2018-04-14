The purpose of this project is to provide an admin UI for laravel spark. It provides a convenient way to manage permission and roles.
Spatie\Permission is the permission/role package the UI will use.

#Installation Instructions
1. Run the following in the root of your project:

```
composer require nathanblazek\laravel-spark-ui-perms_and_roles
```
2. Within your config\app.php file, add the following to your service providers:

```php 
ncb\PermsAndRoles\PermsAndRolesServiceProvider::class
```
3. Publish vendor files
```
php artisan vendor:publish
```