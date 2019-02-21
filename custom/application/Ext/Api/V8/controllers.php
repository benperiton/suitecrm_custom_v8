<?php
/**
 * Define the custom controllers here
 */

use Interop\Container\ContainerInterface as Container;

return [
    'CustomApi\Controller\FusionInvoiceController' => function(Container $container) {
        return new CustomApi\Controller\FusionInvoiceController(
          $container->get('CustomApi\Service\InvoiceService')
        );
    }
];
