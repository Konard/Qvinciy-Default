<?php
/**
 * SimpleStudio - PHP Фреймворк
 *
 * @package		SimpleStudio
 * @author		waldi <vladimiren22@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Controller Demonstration
|--------------------------------------------------------------------------
|
| This is to demonstrate using Controller with Damn Stupid Simple framework
| Try to go to /hello or /hello/yourname and see what it shows
|
*/
Router::get('hello', function (){
    Viewer::file('resources/views/hello.php');
});
Router::get('hello/(:any)', 'Controller\Hello@greetWithName');
Router::post('hello', 'Controller\Hello@greetForm');