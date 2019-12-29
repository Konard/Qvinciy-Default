<?php
/**
 * SimpleStudio - PHP Фреймворк
 *
 * @package		SimpleStudio
 * @author		waldi <vladimiren22@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| The Basic Routes - Route GET / into /home.php
|--------------------------------------------------------------------------
|
| Requests from / will be served by the file /home.php. You can also put
| view files (home.php) into any directory within the project.
|
*/
Router::get('', function() {
	Viewer::file('resources/views/home.php');
});

/*
|--------------------------------------------------------------------------
| Lazy Routing - Route GET /(:any) into /(:any).php
|--------------------------------------------------------------------------
|
| This is to demonstrate wildcard routing, which allows you to route any
| URI into any file.
|
*/
Router::get('(:any)', function($match) {
	Viewer::file('resources/views/' . $match);
});

/*
|--------------------------------------------------------------------------
| Basic Crud Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate posting form data and deleting into a controller
|
*/
Router::post('updateuser', 'Controller\User@editUser');
Router::get('deleteuser', 'Controller\User@deleteUser');