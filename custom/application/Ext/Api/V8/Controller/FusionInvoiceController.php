<?php
namespace CustomApi\Controller;

use Api\V8\Controller\BaseController;
use Exception;
use Slim\Http\Request;
use Slim\Http\Response;
use CustomApi\Service\InvoiceService;

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class FusionInvoiceController extends BaseController
{
    private $invoiceService;

    public function __construct(InvoiceService $invoiceService)
    {
        $this->invoiceService = $invoiceService;
    }

    public function createInvoice(Request $request, Response $response, array $args)
    {
        try {
            $jsonResponse = $this->invoiceService->createInvoice($request);
            return $this->generateResponse($response, $jsonResponse, 200);
        
        } catch (Exception $exception) {
            return $this->generateErrorResponse($response, $exception, 400);
        }
    }
}
