- php artisan make:migration:schema create_tags_table --schema="name:string:unique" --model=0
- php artisan migrate
- php artisan backpack:crud tag #use singular, not plural
- then manually add this to your routes.php file (under the admin prefix and auth middleware):
- CRUD::resource('tag', 'TagCrudController');

///////////////////////////////////////////////////////////////////////////////////////////////////

- php artisan make:migration create_users_table --create=users

- php artisan make:migration add_votes_to_users_table --table=users

/////////////////////////////////////////////////////////////////////////////////////////////////

- composer dump-autoload

