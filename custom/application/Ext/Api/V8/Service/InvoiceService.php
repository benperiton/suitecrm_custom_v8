<?php
namespace CustomApi\Service;

use Api\V8\BeanDecorator\BeanManager;
use Api\V8\JsonApi\Response\DocumentResponse;
use Slim\Http\Request;

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class InvoiceService
{
    private $beanManager;

    public function __construct(BeanManager $beanManager)
    {
        $this->beanManager = $beanManager;
    }

    public function createInvoice(Request $request)
    {
        $response = new DocumentResponse();
        $response->setData($dataResponse);

        return $response;
    }
}
