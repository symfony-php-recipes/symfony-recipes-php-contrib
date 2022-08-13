<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('leogout_seo', [
        'general' => null,
        'basic' => null,
        'og' => null,
        'twitter' => null,
    ]);
};
