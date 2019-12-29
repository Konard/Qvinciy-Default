<?php
// Настройка кэша
return [
  'enabled'   => false,
  'settings'  => [
    /*
     * Хранилище по умолчанию
     * если вы установите это хранилище => 'files', то $ cache = phpFastCache (); <- будет кеш файлов
     */
    'storage'       =>  'auto', // ssdb, predis, redis, mongodb , files, sqlite, auto, apc, wincache, xcache, memcache, memcached,

    /*
     * Путь по умолчанию для кэша на жестком диске
     * Используйте полный путь как /home/username/cache
     * Оставьте это поле пустым '', оно будет автоматически настроено для вас
     */
    'path'          =>  '' , // путь по умолчанию для файлов
    'securityKey'   =>  '', // по умолчанию будет хорошо. Это создаст путь PATH/securityKey

    /*
     * Водитель FallBack
     * Например, в вашем коде вы используете memcached, apc..etc, но когда вы перенесли свой веб-хостинг
     * Пока вы не настроите новое кэширование на сервере, используйте 'overwrite' => 'files'
     */
    'overwrite'     =>  'files', // любое кэширование изменится на files, и вам не нужно менять код

    /*
     *  защита .htaccess
     * по умолчанию будет true
     */
    'htaccess'      =>  true,

    /*
     * Сервер Memcache по умолчанию для всех $ cache = phpFastCache ('memcache');
     */
    'server'        => [
            array('127.0.0.1',11211,1),
    ],

    'memcache'      => [
            array('127.0.0.1', 11211, 1),
    ],
		
    'redis'         => [
            'host'      => '127.0.0.1',
            'port'      => '6379',
            'password'  => '',
            'database'  => '',
            'timeout'   => '',
    ],
		
    'ssdb'          => [
            'host'      => '127.0.0.1',
            'port'      => 8888,
            'password'  => '',
            'timeout'   => '',
    ],
		
    /*
     * Используйте 1 как обычный традиционный, 2 = phpfastcache самый быстрый по умолчанию, 3 = phpfastcache стабильная память
     */
    'caching_method' => 2,
  ]
];