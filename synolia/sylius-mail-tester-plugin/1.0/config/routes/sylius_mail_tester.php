<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SynoliaSyliusMailTesterPlugin/Resources/config/admin_routing.yaml')
        ->prefix('/admin');
};
