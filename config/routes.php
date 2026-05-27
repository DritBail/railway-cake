<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        // Redirige la raíz directamente a Articles
        $builder->connect('/', ['controller' => 'Articles', 'action' => 'index']);

        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });
};
