<?php
// Контроллер роутера для обработки апи запросов

Router::get('addUser', 'Controller\Auth@displayLoginPage');
Router::post('editUser', 'Controller\Auth@doAuthenticate');