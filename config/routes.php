<?php

return [
    [
        'method' => 'GET',
        'path' => '/',
        'controller' => 'Tutorial\\Fastroute\\Controller\\IndexController:index'
    ],
    [
        'method' => 'GET',
        'path' => '/list',
        'controller' => 'Tutorial\\Fastroute\\Controller\\LinksController:index'
    ],
    [
        'method' => ['GET', 'POST'],
        'path' => '/add',
        'controller' => 'Tutorial\\Fastroute\\Controller\\LinksController:add'
    ],
];
