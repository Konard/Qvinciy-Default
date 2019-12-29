<?php
/*
|--------------------------------------------------------------------------
| Контроллер роутера входа в систему
|--------------------------------------------------------------------------
|
| Это демонстрирует использование контроллера для управления аутентификацией
|
*/
Router::get('user/login', 'Controller\Auth@displayLoginPage');
Router::post('user/login', 'Controller\Auth@doAuthenticate');
Router::get('user/register', 'Controller\Auth@displayRegisterPage');
Router::post('user/register', 'Controller\Auth@doRegister');
Router::get('user/logout', 'Controller\Auth@doLogout');