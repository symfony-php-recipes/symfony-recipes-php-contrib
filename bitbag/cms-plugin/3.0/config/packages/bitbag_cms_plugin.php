<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__.'/@BitBagSyliusCmsPlugin/Resources/config/config.php');

    $containerConfigurator->extension('twig', [
        'form_themes' => ['@BitBagSyliusCmsPlugin/Form/ckeditor_widget.html.twig'],
    ]);
};
