--------------------
Extensions installeds
---
Laravel Snippets
PHP Intelephense
Laravel Blade Snippets


-------------
comandos 
----
php artisan make:controller CursoController
php artisan migrate
php artisan make:migration create_cursos_table
php artisan migrate:fresh  //elimina todas las tablas y las vuelve a crear - se elimina el contenido de las tablas
php artisan migrate:refresh  //similar al anterior pero ejecuta el metodo dump de cada tabla 
php artisan migrate:reset  // delete all tables

php artisan tinker //  $cursos = Curso::all(); con este comando recupero todos los registros de la tabla curso
			$cursos = Curso::where('categoria','Diseño web')->get();  con este filtra los resultados
php artisan db:seed  //charge database with seeders that you set before



/* comment */ 
shift + alt + A