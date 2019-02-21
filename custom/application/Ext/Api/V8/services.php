<?php
/**
 * Define the custom services here
 */
use Api\V8\BeanDecorator\BeanManager;
use Interop\Container\ContainerInterface as Container;

return [
    'CustomApi\Service\InvoiceService' => function(Container $container) {
        return new CustomApi\Service\InvoiceService(
          $container->get(BeanManager::class)
        );
    }
];
